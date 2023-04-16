<?php
    use Illuminate\Support\Facades\Route;
    use Modules\Attendence\Http\Controllers\AttendenceController;;


    Route::group(['middleware' => ['auth'], 'prefix' => 'backend', 'as' => 'backend.'], function(){
        Route::resource('attendence', AttendenceController::class);
    });
