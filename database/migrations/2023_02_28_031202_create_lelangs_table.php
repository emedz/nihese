<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLelangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lelangs', function (Blueprint $table) {
            $table->id('id_lelang');
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id');
            $table->integer('penawaran_harga');
            $table->enum('status',['anggota','pemenang'])->default('anggota');
            $table->timestamps();

            $table->foreign('id_produk')->references('id_produk')->on('produks');
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lelangs');
    }
}
