<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationStoreRequest;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
  /**
   * @param RegistrationStoreRequest $request 
   * @return \Illuminate\Http\Response
   */
  public function store(RegistrationStoreRequest $request)
  { 
    return response()->json(200);
  }

}
