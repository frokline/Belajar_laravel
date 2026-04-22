<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;

class PenjualanController extends Controller
{
    //fungsi untuk menampilkan semua data penjualan
    public function index()
    {
        $data = Penjualan::all();
        return response()->json($data);
    }

    //fungsi untuk menyimpan data penjualaan baru
    public function store(Request $request)
    {
        //1. simpan ke tabel penjualan_tabel
        $penjualan = Penjualan::create([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal'      => $request->tanggal,
        ]);

        return response()->json([
            'message' => 'Data penjualan berhasil disimpan!',
            'data'    => $penjualan
        ]);

        return response()->json(['message' => 'Transaksi berhasil disimpan!']);
    }


}
