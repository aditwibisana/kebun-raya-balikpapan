<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarTempatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_tempat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tempat');
            $table->text('deskripsi_tempat');
            $table->bigInteger('harga');
            $table->text('foto_tempat1');
            $table->text('foto_tempat2');
            $table->text('foto_tempat3');
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
        Schema::dropIfExists('daftar_tempat');
    }
}
