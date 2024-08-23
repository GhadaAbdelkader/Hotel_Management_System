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
//        dd('request');
        return [
            'number' => 'required|max:255',
            'type' => 'required',
            'size' => 'required',
            'room_description' => 'required|string',
            'short_description' => 'required|string',
            'main_picture' => 'image|required',
            'pictures.*' => 'required|image',
            'adult_capacity' => 'required|integer|min:1',
            'child_capacity' => 'required|integer|min:1',
            'status' => 'required',
            'price' => 'required|numeric|min:0|max:99999999',
            'amenities' => 'sometimes|array',
            'amenities.*' => 'exists:amenities,id',
        ];
    }
}
