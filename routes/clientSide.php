<?php
use App\Http\Controllers\Auth\LoginGuestController;
use App\Http\Controllers\ClinetSide\HotelController;
use App\Http\Controllers\ClinetSide\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/hotel', [HotelController::class, 'showHotelPage'])->name('hotel');
Route::get('/hotel/room-list', [HotelController::class, 'room_list'])->name('hotel.room_list.room_list');
Route::get('/hotel/room-details/{id}', [HotelController::class, 'show'])->name('hotel.room-details.show');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Routes for showing the login form and handling login
//Route::get('login', [LoginGuestController::class, 'showLoginForm'])->name('login');
// Route to show client-side login form
Route::get('client/login', function () {
    return view('hotel.auth.login', ['loginAs' => 'clientSide']);
})->name('login.client');

// Route to handle client-side login request
Route::post('client/login', [LoginGuestController::class, 'loginSubmit'])->name('login.client.post');



// Route for logging out
Route::post('/clientLogout', [LoginGuestController::class, 'clientLogout'])->name('logout.hotel');


