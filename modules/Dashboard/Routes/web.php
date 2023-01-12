<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'prefix' => 'backend', 'as' => 'backend.'], function(){
	Route::get('/dashboard', fn () => view('dashboard::dashboard'))->name('dashboard');
});
