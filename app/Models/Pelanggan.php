<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // 1. Sesuaikan dengan nama tabel di migration (tanpa akhiran _tabel)
    protected $table = 'pelanggans';

    // 2. Kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'no_hp',
        'alamat'
    ];
}