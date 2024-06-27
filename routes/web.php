<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/index', function () {
    return view('index');
});
Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/room', [RoomController::class, 'rooms'])->name('rooms.index');
Route::get('/room_details/{id}', [RoomController::class, 'show'])->name('room_details.show');

Route::get('/our_offer', function () {
    return view('our_offer');
});
Route::get('/contact', function () {
    return view('contact');
});

