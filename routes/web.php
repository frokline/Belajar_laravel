<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PelangganController;

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

Route::resource('barang', BarangController::class);

Route::get('/halo', function () {
    echo "hallo laravel";
});

Route::resource('penjualan', PenjualanController::class);

Route::resource('pelanggan', PelangganController::class);
