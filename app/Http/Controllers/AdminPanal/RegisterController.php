<?php

namespace App\Http\Controllers\AdminPanal;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;

class RegisterController extends Controller
{
    public function create()
    {
        return view('admin.register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:admins,username',
            'email' => 'required|email|max:255|unique:admins,email',
            'password' => 'required|min:7|max:255',
            'confirmPassword' => 'required|min:7|max:255|same:password'
        ]);



        $adminUser = AdminUser::create($attributes);

        auth()->login($adminUser);

        session()->flash('success', 'Your account has been created.');

        return redirect('/');


    }
}

