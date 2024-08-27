<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginGuestController extends Controller
{

    public function login()
    {
        return view('hotel.auth.Login');
    }

    public function loginSubmit(Request $request){

        $attributes = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
            ]
            );
        // check if the given user exists in db
            if(Auth::attempt($attributes)){
            // check the user role
                return redirect('/hotel');
            }
               return redirect()->route('login.client.post')->with('error', "You dont have permission to access");
        }
    public function clientLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/hotel');
    }

    // Show the login form for the admin panel or general users
//    public function showLoginForm()
//    {
//
//        return view('hotel.auth.login');
//    }
//
//    // Handle login for admin panel or general users
//    public function login(Request $request)
//    {
//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//            'login_as' => ['required', 'in:admin,clientSide']
//        ]);
//
//        $loginAs = $credentials['login_as'];
//        unset($credentials['login_as']);
//
//        if ($loginAs === 'admin') {
//            if (Auth::guard('web')->attempt($credentials)) {
//                $request->session()->regenerate();
//                return redirect()->intended('/');
//            }
//        } elseif ($loginAs === 'clientSide') {
//            if (Auth::guard('clientSide')->attempt($credentials)) {
//                $request->session()->regenerate();
//                return redirect()->intended('/hotel');
//            }
//        }
//
//        return back()->withErrors([
//            'email' => 'The provided credentials do not match our records.',
//        ]);
//    }
//
//    // Handle logout for the web guard
//    public function logout(Request $request)
//    {
//        Auth::guard('web')->logout();
//
//        $request->session()->invalidate();
//        $request->session()->regenerateToken();
//
//        return redirect('/');
//    }
//
//
//    // Handle logout for client-side users
//    public function clientLogout(Request $request)
//    {
//        Auth::guard('clientSide')->logout();
//
//        $request->session()->invalidate();
//        $request->session()->regenerateToken();
//
//        return redirect('/hotel'); // Redirect to the hotel page after logout
//    }
}
