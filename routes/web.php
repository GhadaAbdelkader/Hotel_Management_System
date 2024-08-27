<?php

use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\AdminPanel\AmenityController;
use App\Http\Controllers\AdminPanel\GuestController;
use App\Http\Controllers\AdminPanel\RoomController;
use App\Http\Controllers\Auth\LoginAdminController;
use Illuminate\Support\Facades\Route;
Route::middleware('web')->group(function () {

Route::get('/', function () {
    return view('welcome');
})->middleware('adminCheck');




Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    Route::resource('users', AdminController::class)->except(['show']);
    Route::resource('guests', GuestController::class)->except(['create', 'store', 'show']);
    Route::resource('rooms', RoomController::class);
    Route::resource('amenities', AmenityController::class);
});


// Route for logging out
Route::post('logout', [LoginAdminController::class, 'adminLogout'])->name('logout');



Route::get('admin/login', function () {
    return view('admin.auth.login', ['loginAs' => 'admin']);
})->name('login.admin');

// Route to handle admin login request
Route::post('admin/login', [LoginAdminController::class, 'loginSubmit'])->name('login.admin.post');

});
