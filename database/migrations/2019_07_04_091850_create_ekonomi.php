<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEkonomi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekonomi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelas');
            $table->string('guru');
            $table->string('wali');
            $table->string('siswa');
            $table->integer('umur');
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
        Schema::dropIfExists('ekonomi');
    }
}
