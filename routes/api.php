<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CameraController;
use App\Http\Controllers\Api\AlertController;
use App\Http\Controllers\Api\ProtectedObjectController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/cameras', [CameraController::class, 'index']);
    Route::post('/alerts', [AlertController::class, 'store']);
});

/*
|--------------------------------------------------------------------------
| Camera APIs
|--------------------------------------------------------------------------
*/

Route::get('/cameras/{camera}', [CameraController::class, 'show']);
Route::post('/cameras', [CameraController::class, 'store']);
Route::put('/cameras/{camera}', [CameraController::class, 'update']);
Route::delete('/cameras/{camera}', [CameraController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| Alert APIs
|--------------------------------------------------------------------------
*/

Route::get('/alerts', [AlertController::class, 'index']);
Route::get('/alerts/{alert}', [AlertController::class, 'show']);

/*
|--------------------------------------------------------------------------
| Protected Object APIs
|--------------------------------------------------------------------------
*/

Route::get('/protected-objects', [ProtectedObjectController::class, 'index']);
Route::get('/protected-objects/{protectedObject}', [ProtectedObjectController::class, 'show']);
Route::post('/protected-objects', [ProtectedObjectController::class, 'store']);
Route::put('/protected-objects/{protectedObject}', [ProtectedObjectController::class, 'update']);
Route::delete('/protected-objects/{protectedObject}', [ProtectedObjectController::class, 'destroy']);
