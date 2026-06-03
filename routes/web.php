<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;


Route::get('/', [AbsenController::class, 'index']);

Route::get('/absen', [AbsenController::class, 'index'])->name('absen.index');
