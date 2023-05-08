<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateformRequest extends FormRequest
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
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'full_name' => 'string|required',
      'roll' => 'int|required',
      'email' => 'string|required',
      'student_id' => 'int|required',
      'semester' => 'string|required',
      'departmant' => 'string|required',
      'gender' => 'string|required',
      'address' => 'string|required',
      'father_name' => 'string|required',
      'mother_name' => 'string|required',
      'country' => 'string|required',
      'phone' => 'string|required',
      'blood' => 'string|required',
      'city' => 'string|required',
      'language' => 'array|required',
      'hobby' => 'array|required',
      'dob' => 'string|required',
      'file' => 'image|file|max:1024',
    ];
  }
  public function messages()
  {
    return [
      'full_name.string ' => 'full_name Mustbe a string ',
      'full_name.required ' => 'full_name Mustbe a required ',

      'roll.int ' => 'roll Mustbe a integer ',
      'roll.required ' => 'roll Mustbe a required ',

      'email.string ' => 'email Mustbe a string ',
      'email.required ' => 'email Mustbe a required ',

      'student_id.int ' => 'student Mustbe a integer ',
      'student_id.required ' => 'student_id Mustbe a required ',

      'semester.string ' => 'semester Mustbe a string ',
      'semester.required ' => 'semester Mustbe a required ',

      'phone.string ' => 'phone Mustbe a string ',
      'phone.required ' => 'phone Mustbe a required ',

      'departmant.string ' => 'departmant Mustbe a string ',
      'departmant.required ' => 'departmant Mustbe a required ',

      'gender.string ' => 'gender Mustbe a string ',
      'gender.required ' => 'gender Mustbe a required ',

      'address.string ' => 'address Mustbe a string ',
      'address.required ' => 'address Mustbe a required ',

      'father_name.string ' => 'father_name Mustbe a string ',
      'father_name.required ' => 'father_name Mustbe a required ',

      'mother_name.string ' => 'mother_name Mustbe a string ',
      'mother_name.required ' => 'mother_name Mustbe a required ',

      'country.string ' => 'country Mustbe a string ',
      'country.required ' => 'country Mustbe a required ',

      'blood.string ' => 'blood Mustbe a string ',
      'blood.required ' => 'blood Mustbe a required ',

      'city.string ' => 'city Mustbe a string ',
      'city.required ' => 'city Mustbe a required ',

      'date.string ' => 'date Mustbe a string ',
      'date.required ' => 'date Mustbe a required ',

      'hobby.array ' => 'hobby Mustbe a array ',
      'hobby.required ' => 'hobby Mustbe a required ',

      'language.array ' => 'language Mustbe a array ',
      'language.required ' => 'language  Mustbe a required ',

      'file.file' => 'file must be type of file',
      'file.image' => 'file must be image',
      'file.size' => 'max file size id 1024KB',
    ];
  }
}
