<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'bank_id' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'age' => 'nullable|integer',
            'category' => 'nullable'
        ]);

        // Create a new Register instance
        $register = Register::create($validatedData);

        // Redirect or perform any other actions
        return response('تم تسجيل الدخول');
    }
}
