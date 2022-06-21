<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Article_Post_Rule extends FormRequest
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
            'title_content' => 'required',
            'article' => 'required',
        ];
    }

    public function messages()
    {
      return [
        'title_content.required' => '記事のタイトルを入力してください',
        'article.required'  => '記事の内容を入力してください。',
      ];  
    }
}
