<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang_masuks_tabel', function (Blueprint $table) {
            $table->id();
            
            // Foreign Key ke Detail Pembelian
            $table->unsignedBigInteger('id_detail_pembelian');
            $table->foreign('id_detail_pembelian')->references('id')->on('detailpembelians_tabel');
            
            // Data fisik barang
            $table->date('tanggal_masuk');
            $table->integer('jumlah_masuk');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Penting: Hapus tabel jika di-rollback
        Schema::dropIfExists('barang_masuks_tabel');
    }
};