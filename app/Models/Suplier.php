<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;

    // 1. Sesuaikan dengan nama tabel di migration kamu
    protected $table = 'supliers_tabel';

    // 2. Kolom yang boleh diisi
    protected $fillable = [
        'nama_suplier',
        'no_hp',
        'alamat'
    ];
}