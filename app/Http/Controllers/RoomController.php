<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;

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
    public function room_list(): View
    {

        $rooms = Room::all();
        return view('hotel.room_list.room-list', compact('rooms'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function show($id)
    {
        $room = Room::findOrFail($id); // Assuming you are using an ID to fetch the room
        return view('hotel.room_list.room-details', compact('room'));
    }

//* Store a newly created resource in storage.

    public function create(): View
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // RoomController.php

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
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
        ]);

        $room = new Room();
        $room->fill($request->only([
            'number', 'type', 'size', 'price', 'hotel_name',
            'room_description', 'short_description'
        ]));
        $room->amenities = json_encode($request->input('amenities'));
        $room->amenity_icon = json_encode($request->input('amenity_icon'));
        $room->capacity = json_encode([
            'adult' => $request->input('adult_capacity'),
            'child' => $request->input('child_capacity'),
        ]);
        $room->status = json_encode($request->input('status'));

        $this->handleImageUploads($request, $room);

        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }


    public function edit($id): View
    {
        $room = Room::findOrFail($id);
        return view('admin.rooms.edit', compact('room'));
    }
    /**
     * Update the specified resource in storage.
     */

    #[NoReturn] public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {

        $room = Room::findOrFail($id);

        // Validate the request
        $request->validate([
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
        ]);

        $room->fill($request->only([
            'number', 'type', 'size', 'price', 'hotel_name',
            'room_description', 'short_description'
        ]));
        $room->amenities = json_encode($request->input('amenities'));
        $room->amenity_icon = json_encode($request->input('amenity_icon'));
        $room->capacity = json_encode([
            'adult' => $request->input('adult_capacity'),
            'child' => $request->input('child_capacity')
        ]);
        $room->status = json_encode($request->input('status'));

        $this->handleImageUploads($request, $room);

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room): \Illuminate\Http\RedirectResponse
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }

    /**
     * @param Request $request
     * @param Room $room
     * @return void
     */
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
