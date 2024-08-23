<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmenityRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Ensure you handle authorization as needed
    }

    public function rules()
    {
//        dd('request');
        return [
            'name' => 'required|string|max:255',
            'icon' => 'required|string',
        ];
    }
}
