<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Ensure you handle authorization as needed
    }

    public function rules()
    {
        dd('request');
        return [
            'number' => 'required|max:255',
            'type' => 'required',
            'size' => 'required',
            'amenities' => 'required|array',
            'amenity_icon' => 'required|array',
            'main_picture' => 'nullable|image|required',
            'pictures' => 'nullable|required',
            'adult_capacity' => 'required|integer|min:1',
            'child_capacity' => 'required|integer|min:1',
            'status' => 'required',
            'price' => 'required|integer',
        ];
    }
}
