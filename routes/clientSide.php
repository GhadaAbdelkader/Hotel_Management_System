<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClinetSide\HotelController;
use App\Http\Controllers\ClinetSide\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/hotel', [HotelController::class, 'showHotelPage'])->name('hotel');
Route::get('/hotel/room-list', [HotelController::class, 'room_list'])->name('hotel.room_list.room_list');
Route::get('/hotel/room-details/{id}', [HotelController::class, 'show'])->name('hotel.room-details.show');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/account', [RegisterController::class, 'show'])->name('register.show');




// Route for showing the login form
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Route for handling the login request
Route::post('login', [LoginController::class, 'login']);

// Route for logging out
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

