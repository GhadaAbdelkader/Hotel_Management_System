<?php

use App\Http\Controllers\ClinetSide\HotelController;
use Illuminate\Support\Facades\Route;



Route::get('/hotel', [HotelController::class, 'showHotelPage']);
Route::get('/hotel/room-list', [HotelController::class, 'room_list'])->name('hotel.room_list.room_list');
Route::get('/hotel/room-details/{id}', [HotelController::class, 'show'])->name('hotel.room-details.show');

