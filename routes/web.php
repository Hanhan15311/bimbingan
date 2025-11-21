<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardKoordinatorController;
use App\Http\Controllers\DashboardKaprodiController;
use App\Http\Controllers\LaporanController;

// halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/mahasiswa/dashboard', [DashboardMahasiswaController::class, 'index'])
        ->name('mahasiswa.dashboard');
    Route::get('/mahasiswa/bimbingan', [DashboardMahasiswaController::class, 'bimbingan'])
        ->name('mahasiswa.bimbingan');
    Route::get('/mahasiswa/ajukan', [DashboardMahasiswaController::class, 'ajukan'])
        ->name('mahasiswa.ajukan');
    Route::get('/mahasiswa/dokumen', [DashboardMahasiswaController::class, 'dokumen'])
        ->name('mahasiswa.dokumen');
    Route::get('/mahasiswa/laporan', [DashboardMahasiswaController::class, 'laporan'])
        ->name('mahasiswa.laporan');
        
});

Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosen/dashboard', [DashboardDosenController::class, 'index'])
        ->name('dosen.dashboard');
});

Route::middleware(['auth', 'role:koordinator'])->group(function () {
    Route::get('/koordinator/dashboard', [DashboardKoordinatorController::class, 'index'])
        ->name('koordinator.dashboard');
});

Route::middleware(['auth', 'role:kaprodi'])->group(function () {
    Route::get('/kaprodi/dashboard', [DashboardKaprodiController::class, 'index'])
        ->name('kaprodi.dashboard');
});