<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/carros', [CarController::class, 'index']);
Route::get('/carros/{id}', [CarController::class, 'show']);
Route::post('/carros', [CarController::class, 'store']);
Route::put('/carros/{id}', [CarController::class, 'update']);
Route::delete('/carros/{id}', [CarController::class, 'destroy']);

