<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GuestCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // User is logged in, check the role
            if (Auth::user()->role !== 'guest') {
                // If the user is not a guest, redirect with an error message
                return redirect('/hotel')->with('error', 'You are not registered as a guest.');
            }
        }
        // If user is not logged in or is a guest, proceed
        return $next($request);
    }
}
