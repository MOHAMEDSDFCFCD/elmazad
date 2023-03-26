<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Adminlogin extends FormRequest
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
            'username'=>'required|email|max:100',
            'password'=>'required',
            'number'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'username.required'=>'username is required',
            'password.required'=>'password is required',
            'number.required'=>'number is required',
            'username.email'=>'you should email',
            'number.numeric'=>'you should correct id '
        ];
    }
}
