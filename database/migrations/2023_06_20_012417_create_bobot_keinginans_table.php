<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBobotKeinginansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobot_keinginans', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->float('c1');
            $table->float('c2');
            $table->float('c3');
            $table->float('c4');
            $table->double('wj');
            $table->double('vektor_s');
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
        Schema::dropIfExists('bobot_keinginans');
    }
}
