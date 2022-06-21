<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DB_user_check extends FormRequest
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
          'user_ID' => 'required|regex:/^[a-zA-Z0-9-_]+$/|exists:App\Models\UserTable,user_name|min:8',
          'user_pass' =>'required|regex:/^[a-zA-Z0-9-_]+$/|min:8',  
        ];
    }

    public function messages()
    {
      return [
        'user_ID.required' => 'ユーザーネームを入力してください。',
        'user_ID.regax' => '半角英数字で入力してください',
        'user_ID.exists' => '入力されたユーザーネームは見つかりませんでした。',
        'user_ID.min' => '8文字以上で入力してください',
        'user_pass.required'  => 'パスワードを入力してください。',
        'user_pass.regax' => '半角英数字で入力してください',
        'user_pass.min' => '８文字以上で入力してください',
      ];
    }
}
