<?php


namespace App\Http\Controllers\ClinetSide;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Room;
use Illuminate\View\View;

class HotelController extends Controller
{
    public function showHotelPage()
    {
        return view('hotel.home');
    }
    public function room_list()
    {
        $rooms = Room::all()->map(function($room) {
            $amenityIds = json_decode($room->amenity_ids, true) ?? [];  // Fallback to an empty array if null
            $room->amenities = Amenity::whereIn('id', $amenityIds)->get();
            return $room;
        });

        return view('hotel.room_list.room-list', compact('rooms'));
    }


    public function show($id)
    {

        $room = Room::find($id);
        $amenityIds = json_decode($room->amenity_ids, true);
        if (is_null($amenityIds)) {
            $amenityIds = [];
        }

        $amenities = Amenity::whereIn('id', $amenityIds)->get();
        $similarRooms = Room::where('id', '!=', $room->id)
            ->take(3)
            ->get();
//        dd($amenities);
//dd($room);
        return view('hotel.room_list.room-details', compact('room', 'amenities', 'similarRooms'));
    }

}
