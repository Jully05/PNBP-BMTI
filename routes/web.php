<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KunjinController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\User\RbiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\KolamController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\User\WaskitaController;
use App\Http\Controllers\Admin\ShowRbiController;
use App\Http\Controllers\User\KangguruController;
use App\Http\Controllers\User\LapanganController;
use App\Http\Controllers\User\BinangkitController;
use App\Http\Controllers\User\PancanitiController;
use App\Http\Controllers\Admin\ShowKolamController;
use App\Http\Controllers\Admin\ShowWaskitaController;
use App\Http\Controllers\User\PanglayunganController;
use App\Http\Controllers\Admin\ShowKangguruController;
use App\Http\Controllers\Admin\ShowLapanganController;
use App\Http\Controllers\Admin\BuildingAdminController;
use App\Http\Controllers\Admin\ShowBinangkitController;
use App\Http\Controllers\Admin\ShowPancanitiController;
use App\Http\Controllers\Admin\ShowPanglayunganController;


// Route untuk dashboard admin dengan middleware 'auth'
Route::get('/admin', [BuildingAdminController::class, 'dashboard'])->name('dashboardadmin')->middleware('auth');

// Route untuk halaman login
Route::get('login', [LoginController::class, 'loginform'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', LogoutController::class)->name('logout')->middleware('auth');

// Route untuk menampilkan halaman utama
Route::get('/', function () {
    return view('dashboard', ['title' => 'SARPRAS']);
})->name('dashboard');

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


Route::get('/user/showrbi', [ShowRbiController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::controller(ShowRbiController::class)->group(function () {
        Route::get('/admin/showrbi', 'index')->name('showrbi.index');
        Route::get('/admin/showrbi/create', 'create')->name('showrbi.create');
        Route::get('/admin/showrbi/{id}/edit', 'edit')->name('showrbi.edit');
        Route::post('/admin/showrbi', 'list')->name('showrbi.list');
        Route::put('/admin/showrbi/{id}', 'update')->name('showrbi.update');
        Route::delete('/admin/showrbi/{id}', 'destroy')->name('showrbi.destroy');
    });
});


Route::get('/user/showpancaniti', [PancanitiController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::controller(ShowPancanitiController::class)->group(function () {
        Route::get('/admin/showpancaniti', 'index')->name('showpancaniti.index');
        Route::get('/admin/showpancaniti/create', 'create')->name('showpancaniti.create');
        Route::post('/admin/showpancaniti', 'list')->name('showpancaniti.list');
        Route::get('/admin/showpancaniti/{id}/edit', 'edit')->name('showpancaniti.edit');
        Route::put('/admin/showpancaniti/{id}', 'update')->name('showpancaniti.update');
        Route::delete('/admin/showpancaniti/{id}', 'destroy')->name('showpancaniti.destroy');
    });
});
Route::get('/user/showbinangkit', [BinangkitController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::controller(ShowBinangkitController::class)->group(function () {
        Route::get('/admin/showbinangkit', 'index')->name('showbinangkit.index');
        Route::get('/admin/showbinangkit/create', 'create')->name('showbinangkit.create');
        Route::post('/admin/showbinangkit', 'list')->name('showbinangkit.list');
        Route::get('/admin/showbinangkit/{id}/edit', 'edit')->name('showbinangkit.edit');
        Route::put('/admin/showbinangkit/{id}', 'update')->name('showbinangkit.update');
        Route::delete('/admin/showbinangkit/{id}', 'destroy')->name('showbinangkit.destroy');
    });
});
Route::get('/user/showk', [KolamController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::controller(ShowKolamController::class)->group(function () {
        Route::get('/admin/showk', 'index')->name('showk.index');
        Route::get('/admin/showk/create', 'create')->name('showk.create');
        Route::post('/admin/showk', 'list')->name('showk.list');
        Route::get('/admin/showk/{id}/edit', 'edit')->name('showk.edit');
        Route::put('/admin/showk/{id}', 'update')->name('showk.update');
        Route::delete('/admin/showk/{id}', 'destroy')->name('showk.destroy');
    });
});
Route::get('/user/showlapangan', [LapanganController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::controller(ShowLapanganController::class)->group(function () {
        Route::get('/admin/showlapangan', 'index')->name('showlapangan.index');
        Route::get('/admin/showlapangan/create', 'create')->name('showlapangan.create');
        Route::post('/admin/showlapangan', 'list')->name('showlapangan.list');
        Route::get('/admin/showlapangan/{id}/edit', 'edit')->name('showlapangan.edit');
        Route::put('/admin/showlapangan/{id}', 'update')->name('showlapangan.update');
        Route::delete('/admin/showlapangan/{id}', 'destroy')->name('showlapangan.destroy');
    });
});


Route::get('/user/showpanglayungan', [PanglayunganController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::controller(ShowPanglayunganController::class)->group(function () {
        Route::get('/admin/showpanglayungan', 'index')->name('showpanglayungan.index');
        Route::get('/admin/showpanglayungan/create', 'create')->name('showpanglayungan.create');
        Route::post('/admin/showpanglayungan', 'list')->name('showpanglayungan.list');
        Route::get('/admin/showpanglayungan/{id}/edit', 'edit')->name('showpanglayungan.edit');
        Route::put('/admin/showpanglayungan/{id}', 'update')->name('showpanglayungan.update');
        Route::delete('/admin/showpanglayungan/{id}', 'destroy')->name('showpanglayungan.destroy');
    });
});


Route::get('/user/showkangguru', [KangguruController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::controller(ShowKangguruController::class)->group(function () {
        Route::get('/admin/showkangguru', 'index')->name('showkangguru.index');
        Route::get('/admin/showkangguru/create', 'create')->name('showkangguru.create');
        Route::post('/admin/showkangguru', 'list')->name('showkangguru.list');
        Route::get('/admin/showkangguru/{id}/edit', 'edit')->name('showkangguru.edit');
        Route::put('/admin/showkangguru/{id}', 'update')->name('showkangguru.update');
        Route::delete('/admin/showkangguru/{id}', 'destroy')->name('showkangguru.destroy');
    });
});


Route::get('/user/showwaskita', [WaskitaController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::controller(ShowWaskitaController::class)->group(function () {
        Route::get('/admin/showwaskita', 'index')->name('showwaskita.index');
        Route::get('/admin/showwaskita/create', 'create')->name('showwaskita.create');
        Route::post('/admin/showwaskita', 'list')->name('showwaskita.list');
        Route::get('/admin/showwaskita/{id}/edit', 'edit')->name('showwaskita.edit');
        Route::put('/admin/showwaskita/{id}', 'update')->name('showwaskita.update');
        Route::delete('/admin/showwaskita/{id}', 'destroy')->name('showwaskita.destroy');
    });
});