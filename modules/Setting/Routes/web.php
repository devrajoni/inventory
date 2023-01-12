<?php
use Illuminate\Support\Facades\Route;
use Modules\Setting\Http\Controllers\SettingController;

Route::group(['middleware' => ['auth'], 'prefix' => 'backend', 'as' => 'backend.'], function () {
  Route::get('/setting/{tab?}', [SettingController::class, 'index'])->name('settings.index');
  Route::put('/setting/update', [SettingController::class, 'update'])->name('settings.update');
});
