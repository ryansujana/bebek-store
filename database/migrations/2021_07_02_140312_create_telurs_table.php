<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telurs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga')->default(14000);
            $table->integer('harga_nameset')->default(3000);
            $table->integer('stok_id');
            $table->boolean('is_ready')->default(true);
            $table->string('jenis')->default('Telur Unggulan');
            $table->float('berat')->default(35.274);
            $table->string('gambar');
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
        Schema::dropIfExists('telurs');
    }
}
