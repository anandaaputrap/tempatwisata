<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVektorVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vektor_v_s', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->double('vektor_v');
            $table->unsignedInteger('perhitungan_id');
            $table->foreign('perhitungan_id')->references('id')->on('perhitungan_wisata');
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
        Schema::dropIfExists('vektor_v_s');
    }
}
