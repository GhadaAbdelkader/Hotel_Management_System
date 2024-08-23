<?php

namespace App\Http\Controllers\AdminPanal;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomUpdateRequest;
use App\Models\Amenity;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Services\Functions;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class RoomController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));

    }


//* Store a newly created resource in storage.

    public function create(): View
    {
        $amenities = Amenity::all();
        return view('admin.rooms.create', compact('amenities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // RoomController.php

    public function store(RoomUpdateRequest $request )
    {
//        dd($request->all());
        // Validate the request
        $attributes = $request->validated();
        $attributes = array_merge($attributes, Functions::prepareRoomAttributes($request));
        $Room = Room::create($attributes);
        (new \App\Http\Services\Functions)->handleImageUploads($request, $Room);
        return redirect()->route('admin.rooms.index')->with('success', 'Room created successfully.');
    }


    public function edit(Room $room): View
    {
        $selectedAmenities = json_decode($room->amenity_ids, true);
//dd($selectedAmenities);
        // Fetch all amenities to display in the form
        $amenities = Amenity::all();

        return view('admin.rooms.edit', compact('room', 'amenities', 'selectedAmenities'));    }
    /**
     * Update the specified resource in storage.
     */

    public function update(RoomUpdateRequest $request, Room $room)
    {
        // Validate the request
        $attributes = $request->validated();

        // Prepare additional room attributes
        $attributes = array_merge($attributes, Functions::prepareRoomAttributes($request));

        // Update the room with the new attributes
        $room->update($attributes);

        // Handle image uploads
        (new \App\Http\Services\Functions)->handleImageUploads($request, $room);

        return redirect()->route('admin.rooms.index')->with('success', 'Room updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room): \Illuminate\Http\RedirectResponse
    {
        $room->delete();

        return redirect()->route('admin.rooms.index')->with('success', 'Room deleted successfully.');
    }

    /**
     * @param Request $request
     * @param Room $room
     * @return void
     */



}
