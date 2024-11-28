<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KunjinController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\User\RbiController;
use App\Http\Controllers\User\PancanitiController;
use App\Http\Controllers\Admin\ShowRbiController;
use App\Http\Controllers\Admin\BuildingAdminController;
use App\Http\Controllers\Admin\ShowPancanitiController;

// Route untuk menampilkan halaman utama
Route::get('/', [DashboardController::class, 'index']);

// Route untuk menampilkan data gedung
Route::get('/fasilitas', [BuildingController::class, 'index']);

// Route untuk pendaftaran
Route::get('/register', function () {
    return view('register', ['title' => 'Layanan Magang']);
});

// Route untuk pendaftaran kunjungan industri
Route::get('/kunjin', function () {
    return view('kunjin', ['title' => 'Layanan Kunjungan Industri']);
});

Route::get('/buildings/{id}', [BuildingController::class, 'show'])->name('buildings.show');
Route::resource('admin/buildings', BuildingAdminController::class);
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');
Route::post('/kunjin', [KunjinController::class, 'store'])->name('kunjin.store');


Route::get('/admin/showrbi', [ShowRbiController::class, 'index']);
Route::get('/user/showrbi', [RbiController::class, 'index']);
Route::controller(ShowRbiController::class)->group(function () {
    Route::get('/admin/showrbi', 'index')->name('showrbi.index');
    Route::get('/admin/showrbi/create', 'create')->name('showrbi.create');
    Route::get('/admin/showrbi/{id}/edit', 'edit')->name('showrbi.edit');
    Route::post('/admin/showrbi', 'list')->name('showrbi.list');
    Route::put('/admin/showrbi/{id}', 'update')->name('showrbi.update');
    Route::delete('/admin/showrbi/{id}', 'destroy')->name('showrbi.destroy');
});


Route::get('/admin/showpancaniti', [ShowPancanitiController::class, 'index']);
Route::get('/user/showpancaniti', [PancanitiController::class, 'index']);
Route::controller(ShowPancanitiController::class)->group(function () {
    Route::get('/admin/showpancaniti', 'index')->name('showpancaniti.index');
    Route::get('/admin/showpancaniti/create', 'create')->name('showpancaniti.create');
    Route::post('/admin/showpancaniti', 'list')->name('showpancaniti.list');
    Route::get('/admin/showpancaniti/{id}/edit', 'edit')->name('showpancaniti.edit');
    Route::put('/admin/showpancaniti/{id}', 'update')->name('showpancaniti.update');
    Route::delete('/admin/showpancaniti/{id}', 'destroy')->name('showpancaniti.destroy');
});


