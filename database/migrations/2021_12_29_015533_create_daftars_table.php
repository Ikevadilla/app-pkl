<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
           $table->id();
           $table->string('pasien');
           $table->bigInteger('id_dokter')->unsigned();
           $table->foreign('id_dokter')->reference('id')->on('pasien')->onUpdate('cascade')->onDelete('cascade');
           $table->integer('daftars')->unsigned();
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
        Schema::dropIfExists('daftars');
    }
}
