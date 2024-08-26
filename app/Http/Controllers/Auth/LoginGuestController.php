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

        $request->validate([
                'email'=>'required|email',
                'password'=>'required',
            ]
        );

        $input = $request->all();
        $data = [
            'email' => $input['email'],
            'password' => $input['password']
        ];


        // check if the given user exists in db
        if(Auth::guard('clientSide')->attempt(['email'=> $data['email'], 'password'=> $data['password']])){
//            session()->regenerate();
            // check the user role
            if(Auth::guard('clientSide')->user()->role == 'guest'){
//                dd(Auth::guard('clientSide')->user()->role);
                session()->regenerate();
                return redirect('/hotel');
            }else{
                return redirect()->route('login.client.post')->with('error', "You dont have permission to access");
            }
        }
        else{
            return redirect()->route('login.client.post')->with('error', "Wrong credentials");
        }



    }

    public function clientLogout(Request $request)
    {
        session()->regenerate();

        Auth::guard('clientSide')->logout(); // Logout only from clientSide
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
