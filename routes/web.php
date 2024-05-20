<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function(){
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login',[AuthController::class,'login']);

    Route::view('/register','auth.register')->name('register');
    Route::post('/register',[AuthController::class,'register']);
});







Route::middleware(['auth'])->group(function(){
    Route::view('/','index')->name('dashboard');
    
    // COUSES
    Route::view('/courses','pages.course')->name('courses');

    // ASSIGNMENT
    Route::view('/assignment','pages.assignment')->name('assignment');

    // SETTINGS
    Route::view('/profile','pages.settings')->name('settings');


    // LOGOUT
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


