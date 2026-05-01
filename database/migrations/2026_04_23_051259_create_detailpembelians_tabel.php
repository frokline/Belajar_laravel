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
    Schema::create('detailpembelians_tabel', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_pembelian')->constrained('pembelians_tabel');
        $table->foreignId('id_barang')->constrained('barangs_tabel');
        $table->integer('jumlah');
        $table->integer('harga_beli');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpembelians_tabel');
    }
};
