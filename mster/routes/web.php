<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingController;

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

Route::get('/', function () {
    return view('auth.register');
});

// Route::get('/rooms', function () {
//     return view('rooms');
// });
// Route::get('/resrvition/id/{room_id}', function () {
//     // return view('resrvition');
// });

Route::get('/resrvition/id/{room_id}',[RoomsController::class,'room']);
Route::get('/book1',[RoomsController::class,'book1']);
Route::post('/book1',[BookingController::class,'book1']);
Route::get('/book2',[RoomsController::class,'book2']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/room',[RoomsController::class,'rooms'])->name('room');

// Route::get('/booking', function () {
//     return view('booking');
// });

Route::get('/AboutUs', function () {
    return view('AboutUs');
});


