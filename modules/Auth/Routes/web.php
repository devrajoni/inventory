<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\LoginController;
use Modules\Auth\Http\Controllers\LogoutController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

