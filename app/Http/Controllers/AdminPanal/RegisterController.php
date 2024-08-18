<?php

namespace App\Http\Controllers\AdminPanal;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\AdminUser;

class RegisterController extends Controller
{
    public function create()
    {
        return view('admin.register.create');
    }

    public function store(RegisterRequest $request)
    {
        $attributes = $request->validated();

        $adminUser = AdminUser::create($attributes);
        if($adminUser)
        {
            auth()->login($adminUser);
            session()->flash('success', 'Your account has been created.');

            return redirect('/');
        }




    }
}

