<?php

use App\Http\Controllers\DiscipleshipController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\newaccountController;
use App\Http\Controllers\resetpasswordController;
use App\Http\Controllers\CreatenewpassController;


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/location', [LocationController::class, 'index'])->name('location');
Route::get('home', [DiscipleshipController::class, 'home'])->name('home');
Route::get('/perfil', [PerfilController::class, 'exibirPerfil'])->name('perfil'); 
Route::get('/newaccount', [newaccountController::class, 'newaccount'])->name('newaccount');
Route::get('/resetpassword', [ResetPasswordController::class, 'resetPassword'])->name('resetpassword');
Route::get('/createnewpass', [CreatenewpassController::class, 'index'])->name('createnewpass');


Route::controller(LoginController::class)->group(function() {
    Route::get('/tela-de-login', 'index')->name('login.index');
    Route::post('/login', 'login')->name('login.login');
    Route::get('/logout', 'destroy')->name('login.logout');
});

Route::get('/discipleship', [DiscipleshipController::class, 'index'])->name('discipleship.index');
