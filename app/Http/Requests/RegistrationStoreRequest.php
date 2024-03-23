<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationStoreRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */

  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */

  public function rules()
  {
    return [
      'category' => 'required|not_in:null',
      'start_time' => 'required|not_in:null',
      'entry_fee' => 'required|not_in:null',
      'firstname' => 'required',
      'name' => 'required',
      'street' => 'required',
      'location' => 'required',
      'email' => 'required|email',
      'group_name' => 'required_if:category,group',
      'number_of_members' => 'required_if:category,group|digits_between:1,6',
      'conditions' => 'accepted',
      'buddy' => 'nullable',
      'remarks' => 'nullable',
      'phone' => 'nullable',
    ];
  }

  /**
   * Custom message for validation
   *
   * @return array
   */

  public function messages()
  {
    return [
      'category.required' => 'Kategorie fehlt',
      'start_time.required' => 'Startzeit fehlt',
      'entry_fee.required' => 'Startgebühr fehlt',
      'firstname.required' => 'Vorname fehlt',
      'name.required' => 'Name fehlt',
      'street.required' => 'Straße fehlt',
      'location.required' => 'Ort fehlt',
      'email.required' => 'E-Mail fehlt',
      'email.email' => 'E-Mail ungültig',
      'group_name.required_if' => 'Gruppenname fehlt',
      'number_of_members.digits_between' => 'Anzahl Personen muss zwischen 1 und 6 liegen',
      'number_of_members.required_if' => 'Anzahl Personen fehlt',
      'conditions.accepted' => 'Bedingungen müssen akzeptiert werden',
    ];
  }
}