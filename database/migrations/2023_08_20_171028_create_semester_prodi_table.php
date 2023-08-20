<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemesterProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_prodi', function (Blueprint $table) {
            $table->integer('sempId');
            $table->primary('sempId');
            $table->integer('sempSemId');
            $table->date('sempTglMulaiKrs');
            $table->date('sempTglSelesaiKrs');
            $table->date('sempTglMulaiInputNilai');
            $table->date('sempTglSelesaiInputNilai');
            $table->tinyInteger('sempIsAktif');
            $table->integer('sempProdiKode');
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
        Schema::dropIfExists('semester_prodi');
    }
}
