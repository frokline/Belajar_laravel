<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use App\Models\Barang;
use App\Models\User;

class PenjualanController extends Controller
{
    //fungsi untuk menampilkan semua data penjualan
    public function index()
    {
        $penjualans = Penjualan::with(['pelanggan', 'user', 'detail_penjualan.barang'])->get();
        return view('penjualan.index', compact('penjualans'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $barang = Barang::all();

        return view('penjualan.create', compact('pelanggan', 'barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id',
            'tanggal' => 'required|date',
            'id_barang' => 'required|exists:barangs_tabel,id',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|integer|min:0',
        ]);

        $user = User::first();
        if (! $user) {
            $user = User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        $penjualan = Penjualan::create([
            'id_pelanggan' => $request->id_pelanggan,
            'id_user' => $user->id,
            'tanggal' => $request->tanggal,
        ]);

        DetailPenjualan::create([
            'id_penjualan' => $penjualan->id,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil disimpan');
    }

    public function show($id)
    {
        $penjualan = Penjualan::with(['pelanggan', 'detail_penjualan.barang'])->findOrFail($id);
        return view('penjualan.show', compact('penjualan'));
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->detail_penjualan()->delete();
        $penjualan->delete();

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil dihapus');
    }
}

