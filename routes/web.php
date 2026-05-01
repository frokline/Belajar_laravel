<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\DetailPembelianController;
use App\Http\Controllers\BarangMasukController;

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
Route::get('pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
Route::get('suplier', [SuplierController::class, 'index'])->name('suplier.index');
Route::get('users', [UserController::class, 'index'])->name('user.index');
Route::get('detail-penjualan', [DetailPenjualanController::class, 'index'])->name('detailpenjualan.index');
Route::get('detail-pembelian', [DetailPembelianController::class, 'index'])->name('detailpembelian.index');
Route::get('barang-masuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');

Route::get('/halo', function () {
    echo "hallo laravel";
});

Route::resource('penjualan', PenjualanController::class);

Route::resource('pelanggan', PelangganController::class);
