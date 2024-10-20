<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

Route::apiResource('kategoris', KategoriController::class);
Route::apiResource('bukus', BukuController::class);

Route::get('bukus/search', [BukuController::class, 'search']);
Route::get('/bukus', [BukuController::class, 'indexView']);
Route::post('/bukus', [BukuController::class, 'store']);
