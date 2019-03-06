<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonpendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonpendidikans', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('karyawan_id')->nullable();

            $table->integer('karyawan_id')->unsigned()->nullable();
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');

            $table->string('jenis_pendidikan')->nullable();
            $table->string('lembaga')->nullable();
            $table->string('kota')->nullable();
            $table->string('tahun')->nullable();
            $table->string('durasi')->nullable();
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
        Schema::dropIfExists('nonpendidikans');
    }
}
