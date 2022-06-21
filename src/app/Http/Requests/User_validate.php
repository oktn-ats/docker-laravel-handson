<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User_validate extends FormRequest
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
        'user_name' => 'required|unique:App\Models\UserTable,user_name|regex:/^[a-zA-Z0-9-_]+$/|min:8',
        'user_password' => 'required|regex:/^[a-zA-Z0-9-_]+$/|min:8',
      ];
  }

  public function messages()
  {
      return [
        'user_name.required' => 'ユーザーネームを入力してください。',
        'user_name.regax' => '半角英数字で入力してください',
        'user_name.min' => '8文字以上で入力してください',
        'user_password.required'  => 'パスワードを入力してください。',
        'user_password.regax' => '半角英数字で入力してください',
        'user_password.min' => '８文字以上で入力してください',
      ];
  }
}
