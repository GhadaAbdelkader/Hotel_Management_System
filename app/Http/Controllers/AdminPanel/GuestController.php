<?php


namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GuestController extends Controller
{
    /**
     * Display a listing of the users with guest role.
     */
    public function index(): View
    {
        $guests = User::where('role', 'guest')->get();
        return view('admin.guests.index', compact('guests'));
    }

    /**
     * Show the form for editing the specified guest user.
     */
    public function edit(User $guest): View
    {
        return view('admin.guests.edit', compact('guest'));
    }

    /**
     * Update the specified guest user in storage.
     */
    public function update(Request $request, User $guest)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $guest->id,
            'username' => 'required|string|max:255',
            // Optionally add more validation rules as needed
        ]);

        $guest->update($attributes);

        return redirect()->route('admin.guests.index')->with('success', 'Guest user updated successfully.');
    }

    /**
     * Remove the specified guest user from storage.
     */
    public function destroy(User $guest)
    {
        $guest->delete();

        return redirect()->route('admin.guests.index')->with('success', 'Guest user deleted successfully.');
    }
}
