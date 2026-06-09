<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\AbsenController;
use Illuminate\Support\Facades\Route;

Route::get('', [AbsenController::class, 'index']);


Route::get('/absen', [AbsenController::class, 'index'])->name('Absen.index');
Route::get('/absen/create', [AbsenController::class, 'create'])->name('Absen.create');
Route::post('/absen/store', [AbsenController::class, 'store'])->name('Absen.store');
Route::get('/absen/{absen}/edit', [AbsenController::class, 'edit'])->name('Absen.edit');
Route::put('/absen/{absen}', [AbsenController::class, 'update'])->name('Absen.update');
Route::delete('/absen/{absen}', [AbsenController::class, 'destroy'])->name('Absen.destroy');
Route::get('/departemen', [DepartemenController::class, 'index'])->name('Departemen.index');
Route::get('/departemen/create', [DepartemenController::class, 'create'])->name('Departemen.create');
Route::post('/departemen/store', [DepartemenController::class, 'store'])->name('Departemen.store');
Route::get('/departemen/{departemen}/edit', [DepartemenController::class, 'edit'])->name('Departemen.edit');
Route::put('/departemen/{departemen}', [DepartemenController::class, 'update'])->name('Departemen.update');
Route::delete('/departemen/{departemen}', [DepartemenController::class, 'destroy'])->name('Departemen.destroy');
Route::get('/departemen/{departemen}', [DepartemenController::class, 'show'])->name('Departemen.show');
Route::resource('karyawan', KaryawanController::class);
