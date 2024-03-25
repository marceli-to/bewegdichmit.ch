<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationStoreRequest;
use App\Models\Registration;
use App\Notifications\ConfirmationNotification;
use App\Notifications\RegistrationNotification;

class RegistrationController extends Controller
{
  /**
   * @param RegistrationStoreRequest $request 
   * @return \Illuminate\Http\Response
   */
  public function store(RegistrationStoreRequest $request)
  { 
    $registration = Registration::create($request->validated());

    // if, for some reason, the category is 'single' and 'entry_fee' is not set or below 25, set it to 25
    if ($registration->category === 'single' && (!$registration->entry_fee || $registration->entry_fee < 25)) {
      $registration->entry_fee = 25;
      $registration->save();
    }

    // if, for some reason, the category is 'group' and 'entry_fee' is not set or below 50, set it to 50
    if ($registration->category === 'group' && (!$registration->entry_fee || $registration->entry_fee < 50)) {
      $registration->entry_fee = 50;
      $registration->save();
    }
    
    try {
      Notification::route('mail', env('MAIL_TO'))->notify(new RegistrationNotification($registration));
    } 
    catch (\Exception $e) {
      \Log::error($e->getMessage());
    }

    try {
      Notification::route('mail', $registration->email)->notify(new ConfirmationNotification($registration));
    } 
    catch (\Exception $e) {
      \Log::error($e->getMessage());
    }

    return response()->json(200);
  }

  public function slots()
  {
    // there are 100 slots available for each start time (10.30, 11.15 and 12.00)
    // check how many registrations are already in the database for each start time
    // if a start time has 100 registrations, it is fully booked and should not be available for selection
    $max_slots = 100;

    $slots = Registration::select('start_time', \DB::raw('count(*) as total'))
      ->groupBy('start_time')
      ->get()
      ->keyBy('start_time')
      ->map(function ($item) use ($max_slots) {
        return $max_slots - $item->total;
      });
  
    $default_slots = ['10.30' => $max_slots, '11.15' => $max_slots, '12.00' => $max_slots];

    // if slots is empty, all start times are available
    if ($slots->isEmpty())
    {
      return response()->json(collect($default_slots)->keys());
    }

    // merge the default slots with the available slots
    $slots = collect($default_slots)->merge($slots);

    // if there are no slots available for a start time, remove the from $default_slots
    $available_slots = $slots->filter(function ($item) {
      return $item > 0;
    });

    // only return the keys
    return response()->json($available_slots->keys());
  }

}
