<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrsNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs_nilai', function (Blueprint $table) {
            $table->integer('krsnaId');
            $table->primary('krsnaId');
            $table->integer('krsnaKrsDtId');
            $table->integer('krsnaNilaiTugas');
            $table->integer('krsnaNilaiUTS');
            $table->integer('krsnaNilaiUAS');
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
        Schema::dropIfExists('krs_nilai');
    }
}
