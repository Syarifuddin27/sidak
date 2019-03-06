<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('karyawan_id');

            $table->integer('karyawan_id')->unsigned()->nullable();
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');

            $table->dateTime('tanggal_awal')->nullable();
            $table->dateTime('tanggal_akhir')->nullable();
            $table->integer('sebab')->default(0)->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('absensis');
    }
}
