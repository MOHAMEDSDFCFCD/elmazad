<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Userlogin extends FormRequest
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
            'user_name'=>'required|email|max:100',
            'pass_word'=>'required',
            
            //
        ];
    }
    public function messages()
    {
        return [
            'user_name.required'=>'username is required',
            'pass_word.required'=>'password is required',
            'username.email'=>'you should email',
        ];
    }
}
