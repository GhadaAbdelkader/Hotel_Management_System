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
        return view('hotel.auth.register');
    }

    public function store(RegisterRequest $request)
    {
//        dd($request->all());
        $attributes = $request->validated();
        $attributes['role'] = 'guest';  // Set the role to guest
        $user = User::create($attributes);
//        dd($attributes);
        Auth::login($user);
        return  view('hotel.home')->with('success', 'Your account created successfully.');



    }

    public function show()
    {
        $user = auth()->user();
        return view('hotel.auth.profile', compact('user'));
    }
}

