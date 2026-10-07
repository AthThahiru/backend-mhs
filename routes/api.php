<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\MahasiswaController;

Route::get('/mhs', [MahasiswaController::class, 'index']);
Route::post('/mhs', [MahasiswaController::class, 'store']);
