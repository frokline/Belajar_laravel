<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::all();
        return view('pembelian.index', compact('pembelian'));
    }
}
