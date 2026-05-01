<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        // 0. Buat User default
        $user = User::firstOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin',
            'password' => bcrypt('password'),
        ]);

        // 1. Isi data Pelanggan (Gunakan kolom 'nama' sesuai migration kamu)
        DB::table('pelanggans')->updateOrInsert(
            ['id' => 1],
            [
                'nama' => 'Frokline Customer',
                'no_hp' => '08123456789',
                'alamat' => 'Jl. Contoh No. 1',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // 2. Isi data Barang (Gunakan kolom sesuai migration barangs_tabel kamu)
        DB::table('barangs_tabel')->updateOrInsert(
            ['id' => 1],
            [
                'nama_barang' => 'Laptop Gaming',
                'deskripsi' => 'Spesifikasi tinggi untuk editing video',
                'harga' => 15000000,
                'stok' => 10,
                'foto' => 'laptop.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // 3. Buat Nota Penjualan (Induk)
        $nota = Penjualan::create([
            'id_pelanggan' => 1,
            'id_user' => $user->id,
            'tanggal' => now(),
        ]);

        // 4. Buat Rincian (Anak) - sementara di-comment karena error
        // DetailPenjualan::create([
        //     'id_penjualan' => $nota->id,
        //     'id_barang' => 1,
        //     'jumlah' => 1,
        //     'harga' => 15000000,
        // ]);
    }
}