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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->unsignedBigInteger('id_resto');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_detail');
            $table->unsignedBigInteger('id_pelayan');
            $table->unsignedBigInteger('id_chef');
            $table->unsignedBigInteger('id_status');
            $table->unsignedBigInteger('id_kasir');
            $table->unsignedBigInteger('id_promo');
            $table->Integer('nomor_meja');
            $table->datetime('tanggal');
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();

            $table->foreign('id_menu')->references('id_menu')->on('menus');
            $table->foreign('id_resto')->references('id_resto')->on('restos');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans');
            $table->foreign('id_detail')->references('id_detail')->on('detail_pesanans'); 
            $table->foreign('id_pelayan')->references('id_pelayan')->on('pelayans'); 
            $table->foreign('id_chef')->references('id_chef')->on('chefs'); 
            $table->foreign('id_status')->references('id_status')->on('statuses');
            $table->foreign('id_promo')->references('id_promo')->on('promos');
            $table->foreign('id_kasir')->references('id_kasir')->on('kasirs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
