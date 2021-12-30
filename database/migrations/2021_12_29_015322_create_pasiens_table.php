<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('id_dokter');
              $table->string('nama_pasien');
               $table->string('gender');
                $table->date('tgl_lahir');
                $table->string('alamat');
               $table->integer('no_hp');
            $table->timestamps();

            $table->foreign('id_dokter')->references('id')->on('dokters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}
