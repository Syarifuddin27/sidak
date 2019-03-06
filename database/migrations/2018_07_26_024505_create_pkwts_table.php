<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkwtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkwts', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('karyawan_id');

            $table->integer('karyawan_id')->unsigned()->nullable();
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');

            $table->string('type')->nullable();
            $table->dateTime('tgl_awal')->nullable();
            $table->dateTime('tgl_sampai')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('pkwts');
    }
}
