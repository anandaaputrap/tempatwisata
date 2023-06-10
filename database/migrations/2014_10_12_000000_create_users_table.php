<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('email')->unique();
            $table->string('nama');
            $table->enum('gender', ['Laki', 'Perempuan'])->comment('Laki', 'Aktivasi');
            $table->bigInteger('no_hp')->nullable();
            $table->string('foto')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('status', ['Belum', 'Aktivasi'])->comment('Belum', 'Aktivasi');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
