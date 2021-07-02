<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_details', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_pemesanan');
            $table->integer('total_harga');
            $table->boolean('nameset')->default(false);
            $table->string('nama')->nullable();
            $table->string('nomor')->nullable();
            $table->integer('telur_id');
            $table->integer('pemesanan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan_details');
    }
}
