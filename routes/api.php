<?php

use App\Http\Controllers\API\Auth\RegisterController as AuthRegisterController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function ($router) {

 Route::post('/register',[RegisterController::class,'register']);
//  Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');
// Route::post('/register',[AuthRegisterController::class,'register']);
});
