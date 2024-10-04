<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', ['title' => 'PNBP']);
});
Route::get('/fasilitas', function () {
    return view('fasilitas', ['title' => 'Layanan Penggunaan Fasilitas Lembaga']);
});
Route::get('/magang', function () {
    return view('magang', ['title' => 'Layanan Magang']);
});
