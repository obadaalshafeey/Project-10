<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\HomeController; 

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


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/resrvition/{room_id}',[RoomsController::class,'room']);
Route::get('/book1',[RoomsController::class,'book1']);
Route::post('/book1',[BookingController::class,'book1']);
Route::get('/out',[BookingController::class,'logout']);
Route::get('/book2',[RoomsController::class,'book2'])->middleware('book2');
Route::post('/book22',[RoomsController::class,'book22']);
Route::get('/room',[RoomsController::class,'rooms'])->name('room');
Route::get('/AboutUs', function () {
    return view('AboutUs');
});
Route::get('/', function () {
    return view('landeing');
});
Route::get('/ContactUs', function () {
    return view('ContactUs');
});
Route::get('/landeing', function () {
    return view('landeing');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('send', 'HomeController@sendNotification');
// Route::resource('home', HomeController::class);
// Route::resource('home', 'HomeController'); // It is okkk
// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');




