<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suplier;
use App\Models\DetailPembelian;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelians_tabel';
    protected $fillable = ['id_suplier', 'tanggal', 'total_harga'];

    // Relasi: Pembelian ini MILIK satu suplier
    public function suplier()
    {
        return $this->belongsTo(Suplier::class, 'id_suplier');
    }

    // Relasi: Pembelian ini PUNYA banyak rincian barang
    public function detail_pembelian()
    {
        return $this->hasMany(DetailPembelian::class, 'id_pembelian');
    }
}