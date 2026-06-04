<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;

Route::get('', [AbsenController::class, 'index']);

Route::get('/absen', [AbsenController::class, 'index'])->name('Absen.index');
Route::get('/absen/create', [AbsenController::class, 'create'])->name('Absen.create');
Route::post('/absen/store', [AbsenController::class, 'store'])->name('Absen.store');
Route::get('/absen/{absen}/edit', [AbsenController::class, 'edit'])->name('Absen.edit');
Route::put('/absen/{absen}', [AbsenController::class, 'update'])->name('Absen.update');
