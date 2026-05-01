<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penjualan;
use App\Models\Barang;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $table = 'detailpenjualans_tabel';
    protected $fillable = ['id_penjualan', 'id_barang', 'jumlah', 'harga'];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'id_penjualan');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}