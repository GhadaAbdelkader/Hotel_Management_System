<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Display a listing of the users with admin role
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        return view('admin.users.index', compact('admins'));
    }

    // Show the form for creating a new admin user
    public function create()
    {
        return view('admin.users.create');
    }

    // Store a newly created admin user in storage
    public function store(AdminRequest $request)
    {
        $attributes = $request->validated();
        $attributes['role'] = 'admin';

        User::create($attributes);

        return redirect()->route('admin.users.index')->with('success', 'Admin user created successfully.');
    }

    // Show the form for editing the specified admin user
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Update the specified admin user in storage
    public function update(AdminRequest $request, User $user)
    {
        $attributes = $request->validated();
        $user->update($attributes);

        return redirect()->route('admin.users.index')->with('success', 'Admin user updated successfully.');
    }

    // Remove the specified admin user from storage
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Admin user deleted successfully.');
    }
}
