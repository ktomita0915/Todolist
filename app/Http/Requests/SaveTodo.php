<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveTodo extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return[
            'title'=>['max:50',new Uppercase],
            'priority'=>['integer'],
        ];
    }
    public function messages()
    {
        return[
            'priority.integer'=>'優先度は数字で入力してください',
        ];
    }
}