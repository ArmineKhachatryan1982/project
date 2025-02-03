<?php

use App\Http\Controllers\API\AttendanceSheet\AttendanceSheetController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\VerificationController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
    Route::post('/registration',[RegisterController::class,'register']);
    Route::get('email/verify/{id}', [VerificationController::class,'verify'])->name('verification.verify');

    Route::group(['prefix' => 'auth'], function ($router) {
        Route::post('/login',[AuthController::class,'login']);
        Route::post('me', [AuthController::class,'me']);

    });
    Route::get('/attendance',[AttendanceSheetController::class,'index'] );

