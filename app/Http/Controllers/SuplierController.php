<?php

namespace App\Http\Controllers;

use App\Models\Suplier;

class SuplierController extends Controller
{
    public function index()
    {
        $supliers = Suplier::all();
        return view('suplier.index', compact('supliers'));
    }
}
