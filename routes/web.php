<?php

use App\Http\Controllers\DiscipleshipController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\perfilController;


Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('/location', [locationController::class,'index'])->name('location');
Route::get('home', [DiscipleshipController::class,'home'])->name('home');


Route::controller(LoginController::class) ->group(function(){
    Route::get('/tela-de-login', 'index')->name('login.index');
    Route::post('/login', 'login')->name('login.login');
    Route::get('/logout', 'destroy')->name('login.logout');
});

Route::get('/discipleship', [DiscipleshipController::class,'index'])->name('discipleship.index');

Route::get('/contato', [contatoController::class,'index'])->name('contato');

Route::get('/perfil', [perfilController::class,'index'])->name('perfil');

