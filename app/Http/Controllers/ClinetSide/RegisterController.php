<?php

namespace App\Http\Controllers\ClinetSide;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('hotel.register.create');
    }

    public function store(RegisterRequest $request)
    {
//        dd($request->all());
        $attributes = $request->validated();
        $attributes['role'] = 'guest';  // Set the role to guest
        $user = User::create($attributes);
//        dd($attributes);
        Auth::login($user);
        return redirect()->route('register.show')->with('success', 'Your account created successfully.');



    }

    public function show()
    {
        $user = auth()->user();
        return view('register.show', compact('user'));
    }
}

