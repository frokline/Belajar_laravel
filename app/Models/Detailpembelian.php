<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    use HasFactory;

    protected $table = 'detailpembelians_tabel';
    protected $fillable = ['id_pembelian', 'id_barang', 'jumlah', 'harga_beli'];

    public function pembelian()
    {
        return $this->belongsTo(Pembelian::class, 'id_pembelian');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    // Relasi: Satu rincian pesanan bisa datang bertahap (banyak barang masuk)
    public function barang_masuk()
    {
        return $this->hasMany(BarangMasuk::class, 'id_detail_pembelian');
    }
}