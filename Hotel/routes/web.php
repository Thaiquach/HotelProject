<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'rooms' => RoomController::class
]);

Route::resources([
    'hotels' => HotelController::class
]);

Route::resources([
    'customers' => CustomerController::class
]);

Route::resources([
    'books' => BookingController::class
]);