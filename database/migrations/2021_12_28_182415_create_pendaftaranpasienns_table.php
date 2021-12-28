<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranpasiennsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaranpasienns', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_daftar');
            $table->string('kd_pasien');
            $table->string('kd_poli');
            $table->string('kd_dokter');
            $table->string('kd_obat');
            $table->string('keluhan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaranpasienns');
    }
}
