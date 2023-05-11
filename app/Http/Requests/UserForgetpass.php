<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserForgetpass extends FormRequest
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
            'pass_word'=>'required',
            'new_password'=>'required',
            'confirm_password'=>'required',

        ];
    }
    public function messages()
    {
        return [
           
            'pass_word.required'=>'password is required',
            'new_password.required'=>'please,enter new password ',
            'confirm_password.required'=>'confirm password ',
           
        ];
    }
}
