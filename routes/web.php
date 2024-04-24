<?php

use App\Http\Controllers\KasirController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('login',[KasirController::class,'login']);
Route::post('login',[KasirController::class,'ceklogin']);
Route::get('layout',[KasirController::class,'layout']);

Route::get('datakasir',[KasirController::class,'datakasir']);

Route::get('tambah',[KasirController::class,'tambah']);
Route::post('tambah',[KasirController::class,'tambahk']);

Route::get('edit/{id}',[KasirController::class,'edit']);
Route::post('edit/{id  }',[KasirController::class,'editk']);

Route::get('hapus',[KasirController::class,'hapus']);



