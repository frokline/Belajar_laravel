<?php

namespace App\Http\Controllers;

use App\Models\DetailPembelian;

class DetailPembelianController extends Controller
{
    public function index()
    {
        $detailPembelians = DetailPembelian::with(['pembelian', 'barang', 'barang_masuk'])->get();
        return view('detailpembelian.index', compact('detailPembelians'));
    }
}
