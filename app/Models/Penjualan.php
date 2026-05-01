<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelanggan;
use App\Models\User;
use App\Models\DetailPenjualan;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualans_tabel';
    protected $fillable = ['id_pelanggan', 'id_user', 'tanggal'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function detail_penjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'id_penjualan');
    }
}