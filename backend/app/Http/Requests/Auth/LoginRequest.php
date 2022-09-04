<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
//
//
//  /**
//   * Object data JSON API
//   *
//   * @var array
//   */
//  private array $data = [];
//
//  /**
//   * @return array
//   */
//  public function data()
//  {
//    $data = [];
//
//   $this->set('email');
//   $this->set('password');
//
//
//    return $data;
//  }
//
//  private function set(string $name): array
//  {
//    if (isset($this->data['attributes'][$name])) {
//      $data[$name] = $this->data['attributes'][$name];
//    }
//
//    return $data;
//  }
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
      'email' => 'required|string|email',
      'password' => 'required|string',
    ];
  }
}
