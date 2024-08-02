<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/admin/rooms', RoomController::class);

Route::get('/hotel', [HotelController::class, 'showHotelPage']);
Route::get('/hotel/room-list', [RoomController::class, 'room_list'])->name('hotel.room_list.room_list');
Route::get('/hotel/room-details/{id}', [RoomController::class, 'show'])->name('hotel.room-details.show');
