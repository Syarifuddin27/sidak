<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengalamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalamen', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('karyawan_id')->nullable();

            $table->integer('karyawan_id')->unsigned()->nullable();
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');

            $table->string('nama_perusahaan')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('gaji')->nullable();
            $table->dateTime('mulai_kerja')->nullable();
            $table->dateTime('akhir_kerja')->nullable();
            $table->string('alasan')->nullable();
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
        Schema::dropIfExists('pengalamen');
    }
}
