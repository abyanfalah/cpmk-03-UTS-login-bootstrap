<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect(route('home'));
    });

    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('images', ImageController::class);
});

Route::middleware('guest')->group(function () {
    Route::get('/auth', function () {
        return view('auth');
    });

    Route::post('/auth', [AuthController::class, 'authenticate'])->name('login');
});









