<?php

use App\Http\Controllers\Api\AlertController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/alerts', [AlertController::class, 'index']);
Route::get('/alerts/{alert}', [AlertController::class, 'show']);
Route::post('/alerts', [AlertController::class, 'store']);
