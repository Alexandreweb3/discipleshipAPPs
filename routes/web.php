<?php

use App\Http\Controllers\DiscipleshipController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PerfilController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/location', [LocationController::class, 'index'])->name('location');
Route::get('home', [DiscipleshipController::class, 'home'])->name('home');
Route::get('/perfil', [PerfilController::class, 'exibirPerfil'])->name('perfil'); 

Route::controller(LoginController::class)->group(function() {
    Route::get('/tela-de-login', 'index')->name('login.index');
    Route::post('/login', 'login')->name('login.login');
    Route::get('/logout', 'destroy')->name('login.logout');
});

Route::get('/discipleship', [DiscipleshipController::class, 'index'])->name('discipleship.index');
