<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function login()
    {
        return view('admin.auth.Login');
    }

    public function loginSubmit(Request $request){
//        dd('test');
        $attributes = $request->validate([
                'email'=>'required|email',
                'password'=>'required'
            ]
        );

        // check if the given user exists in db
        if(Auth::attempt($attributes)){
            // check the user role
//            Auth::guard('web')->login($uesr);
            $request->session()->regenerate();

            return redirect('/Home');
            }
                return redirect()->route('login.admin.post')->with('error', "You dont have permission to access");
    }

    public function adminLogout(Request $request)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            // Logout the user if they are an admin
            Auth::logout();

            // Invalidate the session
            $request->session()->invalidate();

            // Regenerate the CSRF token

            // Redirect to a specific page after logout
            return redirect('/Home')->with('status', 'Admin logged out successfully.');
        }

        // If the user is not an admin, redirect them with an error message
        return redirect('/admin/dashboard')->with('error', 'You are not authorized to perform this action.');
    }




}
