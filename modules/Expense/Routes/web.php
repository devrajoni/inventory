<?php

use Illuminate\Support\Facades\Route;
use Modules\Expense\Http\Controllers\ExpenseCategoryController;
use Modules\Expense\Http\Controllers\ExpenseController;

Route::group(['middleware' => ['auth'], 'prefix' => 'backend', 'as' => 'backend.'], function(){
    Route::resource('expense-categories', ExpenseCategoryController::class);
    Route::resource('expenses', ExpenseController::class);
});