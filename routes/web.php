<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Route untuk fitur CRUD mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);

// Route halaman utama (root "/")
Route::get('/', function () {
    return redirect('/mahasiswa');
});


