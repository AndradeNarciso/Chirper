<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChirpController::class, 'index']);

Route::prefix('v1')->group(function () {

    Route::post('/chirps', [ChirpController::class, 'store']);

    Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);

    Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);

    Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);

});