<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AdminRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Ensure you handle authorization as needed
    }
    public function rules()
    {
        $userId = $this->route('user') ? $this->route('user')->id : null;

        return [
            'name' => 'required|max:255',
            'username' => [
                'required',
                'max:255',
                'min:3',
                Rule::unique('users', 'username')->ignore($userId),
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($userId),
            ],
            'password' => 'nullable|min:7|max:255',
            'confirmPassword' => 'nullable|min:7|max:255|same:password',
        ];
    }


}
