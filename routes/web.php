<?php

use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\AdminPanel\AmenityController;
use App\Http\Controllers\AdminPanel\GuestController;
use App\Http\Controllers\AdminPanel\RoomController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    Route::resource('users', AdminController::class)->except(['show']);
    Route::resource('guests', GuestController::class)->except(['create', 'store', 'show']);
    Route::resource('rooms', RoomController::class);
    Route::resource('amenities', AmenityController::class);
});

// Route for showing the login form
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Route for handling the login request
Route::post('login', [LoginController::class, 'login']);

// Route for logging out
Route::post('logout', [LoginController::class, 'logout'])->name('logout');








