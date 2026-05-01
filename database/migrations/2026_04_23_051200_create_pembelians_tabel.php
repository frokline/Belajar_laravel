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
        Schema::create('pembelians_tabel', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_suplier');
            $table->foreign('id_suplier')->references('id')->on('supliers_tabel');

            //data transaksi
            $table->date('tanggal');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    
    {
        Schema::dropIfExists('pembelians_tabel');
    }
};
