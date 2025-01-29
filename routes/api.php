<?php

use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\VerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::post('/registration',[RegisterController::class,'register']);

// Отправить повторное письмо для верификации
// Route::post('/email/resend', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
//     return response()->json(['message' => 'Email verification link sent.']);
// })->middleware('auth:api');
// Route::get('email/verify/{id}', [VerificationController::class,'verify'])->name('verification.verify');
