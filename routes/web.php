<?php

use Illuminate\Support\Facades\Route;

Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/magang', function () {
    return view('magang');
});
Route::get('/magon', function () {
    return view('magon');
});
