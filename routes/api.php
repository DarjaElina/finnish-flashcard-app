<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WordController;
use App\Http\Controllers\Api\ExternalWordController;
Route::apiResource('words/external', ExternalWordController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('words', WordController::class);
});