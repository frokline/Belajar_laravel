<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;

class DetailPenjualanController extends Controller
{
    public function index()
    {
        $detailPenjualans = DetailPenjualan::with(['penjualan', 'barang'])->get();
        return view('detailpenjualan.index', compact('detailPenjualans'));
    }
}
