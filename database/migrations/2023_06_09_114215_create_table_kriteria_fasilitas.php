<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKriteriaFasilitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_fasilitas', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('fasilitas');
            $table->enum('status', ['Active', 'Off'])->comment('Active', 'Off');
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
        Schema::dropIfExists('kriteria_fasilitas');
    }
}
