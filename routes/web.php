<?php

use App\Http\Controllers\AdminPanal\AmenityController;
use App\Http\Controllers\AdminPanal\RegisterController;
use App\Http\Controllers\AdminPanal\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/admin/rooms', RoomController::class);

//Route::resource('/admin/amenities', AmenityController::class);
Route::middleware(['web'])->group(function () {
    Route::resource('/admin/amenities', AmenityController::class);
    // باقي الراوتات
});
Route::middleware(['web'])->group(function () {
    Route::get('register', [RegisterController::class, 'create']);
    Route::post('register', [RegisterController::class, 'store']);});

//Route::middleware('guest')->group(function () {
//    Route::get('register', [RegisterController::class, 'create']);
//    Route::post('register', [RegisterController::class, 'store']);
//});
