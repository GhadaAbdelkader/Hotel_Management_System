<?php

namespace App\Http\Services;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Functions
{
    public function handleImageUploads(Request $request, Room $room): void
    {
        // Handle main picture upload
        if ($request->hasFile('main_picture')) {
            $file = $request->file('main_picture');
            $path = $file->store('images', 'public');
            $room->main_picture = Storage::url($path);
        }

        // Handle additional pictures upload
        if ($request->hasFile('pictures')) {
            $pictures = [];
            foreach ($request->file('pictures') as $file) {
                $path = $file->store('images', 'public');
                $pictures[] = Storage::url($path);
            }
            $room->pictures = json_encode($pictures); // Store as JSON
        }

        $room->save();
    }



    public static function prepareRoomAttributes($request)
    {
        return [
            'amenities' => json_encode($request->input('amenities')),
            'amenity_icon' => json_encode($request->input('amenity_icon')),
            'pictures' => json_encode($request->input('pictures')),
            'capacity' => json_encode([
                'adult' => $request->input('adult_capacity'),
                'child' => $request->input('child_capacity')
            ]),
        ];
    }
}
