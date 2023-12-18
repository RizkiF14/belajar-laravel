<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('input');
});

Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
Route::post('/barangs', [BarangController::class, 'store'])->name('barangs.store');
Route::delete('/barangs/{barang}', [BarangController::class, 'destroy'])->name('barangs.destroy');
Route::get('/barangs/{barang}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
Route::put('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');
Route::get('/barangs/create', [BarangController::class, 'create'])->name('input');
