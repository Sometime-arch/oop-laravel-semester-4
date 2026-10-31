<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen',[DosenController::class,'index']);
Route::get('/form_dosen',[DosenController::class,'create']);
Route::post('/dosen/store',[DosenController::class,'store']);
Route::get('/destroy_dosen/{id}',[DosenController::class,'destroy']);
Route::get('/edit_dosen/{id}',[DosenController::class,'edit']);
Route::post('/update_dosen/{id}',[DosenController::class,'update']);



Route::get('/mhs',[MhsController::class,'index']);
Route::get('/form_mhs',[MhsController::class,'create']);
Route::post('/mhs/store',[MhsController::class,'store']);

Route::get('/matkul',[MatkulController::class,'index']);
Route::get('/form_matkul',[MatkulController::class,'create']);
Route::post('/matkul/store',[MatkulController::class,'store']);


// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

