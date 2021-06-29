<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPengunjungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengunjung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->bigInteger('pin');
            $table->bigInteger('no_hp');
            $table->string('jenis_kelamin');
            $table->string('nama_lengkap');
            $table->text('alamat')->nullable();
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
        Schema::dropIfExists('data_pengunjung');
    }
}
