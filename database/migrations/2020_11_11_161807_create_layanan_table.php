<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->increments('id_layanan');
            $table->integer('id_mitra')->unsigned();
            $table->string('nama');
            $table->string('deskripsi');
            $table->integer('harga');
            $table->string('pilihan');
            $table->timestamps();

            $table->foreign('id_mitra')->references('id_mitra')->on('mitra');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan');
    }
}
