<?php

namespace App\Http\Helpers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Functions
{
    public function handleImageUploads(Request $request, Room $room): void
    {
        $room->status = json_encode($request->input('status'));

        if ($request->hasFile('main_picture')) {
            // Handle main picture upload
            $file = $request->file('main_picture');
            $path = $file->store('images', 'public');
            $room->main_picture = Storage::url($path);
        }

        if ($request->hasFile('pictures')) {
            // Handle additional pictures upload
            $pictures = [];
            foreach ($request->file('pictures') as $file) {
                if ($file) {
                    $path = $file->store('images', 'public');
                    $pictures[] = Storage::url($path);
                }
            }
            $room->pictures = json_encode($pictures);
        }

        $room->price = $request->input('price');
        $room->save();
    }

}
