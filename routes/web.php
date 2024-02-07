<?php

use App\Http\Controllers\DiscipleshipController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('/location', [locationController::class,'index'])->name('location');
Route::get('home', [DiscipleshipController::class,'home'])->name('home');

Route::controller(LoginController::class) ->group(function(){
    Route::get('/index', 'index')->name('login.index');
    Route::post('/login', 'login')->name('login.login');
    Route::get('/logout', 'destroy')->name('login.logout');
});

Route::get('/discipleship', [DiscipleshipController::class,'index'])->name('discipleship.index');

