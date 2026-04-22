<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;

Route::get('/', function () {
    return view('welcome');
})->name('show');

Route::get('/tes', function () {
    echo "hello world!";
});

Route::get('/show/{id}', function ($id) {
    echo "nilai parameter adalah $id";
});

Route::get('/balik', function () {
    echo "<a href='" . route('show') . "'>kembali ke halaman utama</a>";
})->name('balik');

Route::get('/barang', [BarangController::class,'index']
)->name('barang');

Route::get('/halo', function () {
    echo "hallo laravel";
});

Route::get('/transaksi', [PenjualanController::class,'index']);