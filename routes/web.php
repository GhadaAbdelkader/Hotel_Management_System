<?php

use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\AdminPanel\AmenityController;
use App\Http\Controllers\AdminPanel\GuestController;
use App\Http\Controllers\AdminPanel\RoomController;
use App\Http\Controllers\Auth\LoginAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('welcome');
})->middleware(['adminCheck'])->name('dashboard');

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware([ 'adminCheck'])->group(function () {

    // Admin Resource Routes
    Route::resource('users', AdminController::class)->except(['show']);
    Route::resource('guests', GuestController::class)->except(['create', 'store', 'show']);
    Route::resource('rooms', RoomController::class);
    Route::resource('amenities', AmenityController::class);

    // Admin Logout
    Route::post('logout', [LoginAdminController::class, 'adminLogout'])->name('logout');
});


Route::get('admin/login', function () {
//    dd(Auth::check());
    return view('admin.auth.login', ['loginAs' => 'admin']);
})->name('login.admin');

// Route to handle admin login request
Route::post('admin/login', [LoginAdminController::class, 'loginSubmit'])->name('login.admin.post');

