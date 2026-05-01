<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangMasuks = BarangMasuk::with('detail_pembelian')->get();
        return view('barangmasuk.index', compact('barangMasuks'));
    }
}
