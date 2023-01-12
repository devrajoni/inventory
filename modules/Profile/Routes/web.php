<?php

use Illuminate\Support\Facades\Route;
use Modules\Profile\Http\Controllers\ProfileController;
use Modules\Profile\Http\Controllers\PasswordChangeController;

Route::group(['middleware' => ['auth'], 'prefix' => 'backend', 'as' => 'backend.'], function () {
	Route::get('/profile/{tab?}', [ProfileController::class, 'index'])->name('profile.index');
	Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
	Route::put('/profile/{user}/password', [PasswordChangeController::class, 'update'])->name('password_change');
});

