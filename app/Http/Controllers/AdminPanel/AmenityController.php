<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AmenityRequest;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    public function index()
    {
        $amenities = Amenity::all();
        return view('admin.amenities.index', compact('amenities'));
    }

    public function create()
    {
//        dd('request');

        return view('admin.amenities.create');
    }

    public function store(AmenityRequest $request)
    {
//                dd($request->all());
//        dd('request');


        $attributes = $request->validated();

        Amenity::create($attributes);

        return redirect()->route('admin.amenities.index')->with('success', 'Amenity created successfully.');
    }

    public function show(Amenity $amenity)
    {
        return view('admin.amenities.show', compact('amenity'));
    }

    public function edit(Amenity $amenity)
    {
        return view('admin.amenities.edit', compact('amenity'));
    }

    public function update(Request $request, Amenity $amenity)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string',
        ]);

        $amenity->update($validatedData);

        return redirect()->route('admin.amenities.index')->with('success', 'Amenity updated successfully.');
    }

    public function destroy(Amenity $amenity)
    {
        $amenity->delete();

        return redirect()->route('admin.amenities.index')->with('success', 'Amenity deleted successfully.');
    }
}
