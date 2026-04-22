<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualans_tabel';
    protected $fillable = ['id_pelanggan', 'tanggal'];
}
