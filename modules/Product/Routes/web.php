<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\CategoryController;
use Modules\Product\Http\Controllers\BrandController;
use Modules\Product\Http\Controllers\UnitController;
use Modules\Product\Http\Controllers\BarcodeController;
use Modules\Product\Http\Livewire\Product;


Route::group(['middleware' => ['auth'], 'prefix' => 'backend', 'as' => 'backend.'], function(){
    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('units', UnitController::class);
    Route::resource('products', Product::class);
    Route::resource('barcodes', BarcodeController::class);
});
