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
        return [
            'number' => 'required',
            'type' => 'required',
            'size' => 'required',
            'amenities' => 'required|array',
            'amenity_icon' => 'required|array',
            'main_picture' => 'nullable|image',
            'pictures.*' => 'nullable|image',
            'adult_capacity' => 'required|integer|min:0',
            'child_capacity' => 'required|integer|min:0',
            'status' => 'required|array',
            'price' => 'required|numeric',
        ];
    }
}
