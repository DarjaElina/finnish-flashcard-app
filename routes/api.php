<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WordController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ExternalWordController;
Route::apiResource('words/external', ExternalWordController::class);
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('words', WordController::class);
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
});