<?php

use App\Http\Controllers\AdminPanal\RegisterController;
use App\Http\Controllers\AdminPanal\RoomController;
use App\Http\Controllers\ClinetSide\HotelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/admin/rooms', RoomController::class);

Route::get('/hotel', [HotelController::class, 'showHotelPage']);
Route::get('/hotel/room-list', [HotelController::class, 'room_list'])->name('hotel.room_list.room_list');
Route::get('/hotel/room-details/{id}', [HotelController::class, 'show'])->name('hotel.room-details.show');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create']);
    Route::post('register', [RegisterController::class, 'store']);
});
