<?php
use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;
use Modules\User\Http\Controllers\RoleController;

Route::group(['middleware' => ['auth'], 'prefix' => 'backend', 'as' => 'backend.'], function () {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
});

