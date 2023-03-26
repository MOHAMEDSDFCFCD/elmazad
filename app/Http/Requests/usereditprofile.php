<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usereditprofile extends FormRequest
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
            'user_name'=>'required|email|max:100',//unique:login_user,user_name
            'pass_word'=>'required',
            'photo'=>'max:1000|mimes:png,jpg,jpeg',
            
            //
        ];
    }
    public function messages()
    {
        return [
            'user_name.required'=>'username is required',
            'pass_word.required'=>'password is required',
            'user_name.email'=>'you should email',
           /* 'user_name.unique'=>'you should anthor user_name because it used'*/
        ];
    }
}
