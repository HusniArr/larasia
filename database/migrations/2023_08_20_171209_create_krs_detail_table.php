<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs_detail', function (Blueprint $table) {
            $table->integer('krsdtId');
            $table->primary('krsdtId');
            $table->integer('krsdtKrsId');
            $table->tinyInteger('krsdtBobotNilai');
            $table->string('krsdtKodeNilai', 1);
            $table->integer('krsKlsId');
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
        Schema::dropIfExists('krs_detail');
    }
}
