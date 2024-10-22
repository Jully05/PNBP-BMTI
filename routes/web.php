<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\Admin\BuildingAdminController;

Route::get('/', function () {
    return view('dashboard', ['title' => 'PNBP']);
});

// Route untuk menampilkan data gedung
Route::get('/fasilitas', [BuildingController::class, 'index']);

// Route untuk pendaftaran
Route::get('/register', function () {
    return view('register', ['title' => 'Layanan Magang']);
});

Route::get('/buildings/{id}', [BuildingController::class, 'show'])->name('buildings.show');

Route::resource('cards', CardController::class);
Route::resource('admin/buildings', BuildingAdminController::class);
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');
