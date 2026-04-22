<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Isi data Pelanggan (Gunakan kolom 'nama' sesuai migration kamu)
        DB::table('pelanggans')->insert([
            'id' => 1,
            'nama' => 'Frokline Customer',
            'no_hp' => '08123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Isi data Barang (Gunakan kolom sesuai migration barangs_tabel kamu)
        DB::table('barangs_tabel')->insert([
            'id' => 1,
            'nama_barang' => 'Laptop Gaming',
            'deskripsi' => 'Spesifikasi tinggi untuk editing video',
            'harga' => 15000000,
            'stok' => 10,
            'poto' => 'laptop.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Buat Nota Penjualan (Induk)
        $nota = Penjualan::create([
            'id_pelanggan' => 1, 
            'tanggal'      => now(),
        ]);

        // 4. Buat Rincian (Anak)
        DetailPenjualan::create([
            'id_penjualan' => $nota->id,
            'id_barang'    => 1,
            'jumlah'       => 1,
        ]);
    }
}