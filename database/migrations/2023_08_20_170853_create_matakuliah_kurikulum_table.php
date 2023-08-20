<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahKurikulumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah_kurikulum', function (Blueprint $table) {
            $table->string('mkkurId', 45);
            $table->primary('mkkurId');
            $table->string('mkkurNama', 45);
            $table->integer('mkkurKurId');
            $table->tinyInteger('mkkurSemester');
            $table->tinyInteger('mkkurJenisSemester');
            $table->tinyInteger('mkkurJumlahSks');
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
        Schema::dropIfExists('matakuliah_kurikulum');
    }
}
