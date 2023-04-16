<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\CategoryController;
use Modules\Product\Http\Controllers\BrandController;
use Modules\Product\Http\Controllers\UnitController;
use Modules\Product\Http\Controllers\BarcodeController;
use Modules\Product\Http\Controllers\ProductsController;


Route::group(['middleware' => ['auth'], 'prefix' => 'backend', 'as' => 'backend.'], function(){
    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('units', UnitController::class);
    Route::resource('products', ProductsController::class);
    Route::resource('barcodes', BarcodeController::class);
    Route::get('/export', [ProductsController::class, 'export'])->name('export');
    Route::get('/importExportView', [ProductsController::class, 'importExportView'])->name('importExportView');
    Route::post('/import', [ProductsController::class, 'import'])->name('import');
    Route::get('/searches', [ProductsController::class, 'search'])->name('searches');
});
