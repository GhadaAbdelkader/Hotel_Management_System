<?php


namespace App\Http\Controllers\ClinetSide;

use App\Http\Controllers\Controller;
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

        $rooms = Room::all();
        return view('hotel.room_list.room-list', compact('rooms'));

    }
    public function show(Room $room)
    {
        return view('hotel.room_list.room-details', compact('room'));
    }
}
