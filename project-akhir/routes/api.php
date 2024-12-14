<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\Api\DosenController;
use App\Http\Controllers\Api\MakulController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    // Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'read']);
    Route::post('/mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
    Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'delete']);

    // Dosen
    Route::get('/dosen', [DosenController::class, 'read']);
    Route::post('/dosen/create', [DosenController::class, 'create']);
    Route::put('/dosen/{id}', [DosenController::class, 'update']);
    Route::delete('/dosen/{id}', [DosenController::class, 'delete']);

    // Makul
    Route::get('/makul', [MakulController::class, 'read']);
    Route::post('/makul/create', [MakulController::class, 'create']);
    Route::put('/makul/{id}', [MakulController::class, 'update']);
    Route::delete('/makul/{id}', [MakulController::class, 'delete']);
});

