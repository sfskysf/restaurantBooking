<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/reservations', function () {
    return view('reservations');
})->name('reservations');

Route::post('/newBooking', 'BookingController@store');

Route::get('/', function () {
    return view('RestaurantMain');
})->name('home');

Route::get('/food-menu', function () {
    return view('RestaurantMenu');
})->name('menu');

Route::get('contact', function () {
    return view('RestaurantContact');
})->name('contact');
