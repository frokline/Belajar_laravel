<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs_tabel';
    protected $fillable = ['nama_barang', 'deskripsi', 'harga', 'stok', 'foto'];

    // Relasi: Satu barang bisa ada di banyak detail pembelian
    public function detail_pembelian()
    {
        return $this->hasMany(DetailPembelian::class, 'id_barang');
    }

    // Relasi: Satu barang bisa ada di banyak detail penjualan
    public function detail_penjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'id_barang');
    }
}