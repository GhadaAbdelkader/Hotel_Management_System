<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Ensure you handle authorization as needed
    }

    public function rules()
    {
//        dd('request');
        return [
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required|digits_between:10,15|unique:users,phone',
            'password' => 'required|min:7|max:255',
            'confirmPassword' => 'required|min:7|max:255|same:password'
        ];
    }
}
