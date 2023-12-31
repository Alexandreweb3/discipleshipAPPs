<?php

use App\Http\Controllers\AulasController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index'])->name('index');

Route::controller(LoginController::class) ->group(function(){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'login')->name('login.login');
    Route::get('/logout', 'destroy')->name('login.destroy');
    Route::get('/home', 'home')-> name('login.home');
});

Route::get('/aulas', [AulasController::class,'aulas'])->name('aulas.aulas');


