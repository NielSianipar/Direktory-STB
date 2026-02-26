<?php

use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DirectoryController;

Route::get('/', [MajorController::class, 'index']);

Route::get('/hello', function () {
    return view('hello');
});

// Grup API
Route::prefix('api')->group(function () {
    // Rute untuk pencarian (Ini yang tadi kurang)
    Route::get('/search', [DirectoryController::class, 'search']);

    // Rute kategori spesifik
    Route::prefix('directory')->group(function () {
        Route::get('/mahasiswa', [DirectoryController::class, 'mahasiswa']);
        Route::get('/dosen', [DirectoryController::class, 'dosen']);
        Route::get('/staff', [DirectoryController::class, 'staff']);
    });
});