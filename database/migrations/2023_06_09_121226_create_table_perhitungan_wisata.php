<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePerhitunganWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungan_wisata', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('harga_tiket');
            $table->integer('fasilitas');
            $table->integer('jarak');
            $table->integer('pelayanan');
            $table->integer('suasana');
            $table->integer('total');
            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedInteger('wisata_id');
            $table->foreign('wisata_id')->references('id')->on('wisata');
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
        Schema::dropIfExists('perhitungan_wisata');
    }
}
