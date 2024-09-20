<?php

use App\Http\Controllers\StudentControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//index/ List siswa
Route::get('/student',[StudentControler::class, 'index']);
// Show / show siswa
Route::get('/student/{nis}',[StudentControler::class, 'show']);
// create / Create siswa
Route::post('/student',[StudentControler::class, 'create']);

Route::put('/student/{id}',[StudentControler::class, 'update']);

Route::delete('/student/{id}',[StudentControler::class, 'destroy']);


