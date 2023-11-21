<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;


Route::get('/input_barang', [BarangController::class, 'create']);
Route::post('/process_barang', [BarangController::class, 'process']);
