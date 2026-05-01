<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailPembelian;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuks_tabel';
    protected $fillable = [
        'id_detail_pembelian',
        'tanggal_masuk',
        'jumlah_masuk'
    ];

    /**
     * Relasi: Barang Masuk ini milik satu rincian pembelian tertentu.
     */
    public function detail_pembelian()
    {
        return $this->belongsTo(DetailPembelian::class, 'id_detail_pembelian');
    }
}