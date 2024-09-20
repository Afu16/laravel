<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

// Root -> menampilkan view welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    // return 'teks apa';
    return view('home');
});

Route::get('/pplg',[SiswaController::class, 'index']);

Route::get('/siswa', function () {
    return view('siswa');
});



