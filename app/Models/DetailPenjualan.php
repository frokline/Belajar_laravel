<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $table = 'detailpenjualans_tabel';
    protected $fillable = ['id_penjualan', 'id_barang', 'jumlah'];
}
