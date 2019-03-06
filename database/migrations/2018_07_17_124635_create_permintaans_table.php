<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermintaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number');
            $table->string('bukti_tertulis')->nullable();
            $table->string('unit');
            $table->dateTime('tgl_order');
            $table->string('no_spk')->nullable();
            $table->string('bertemu');
            
            $table->integer('jabatan_id')->unsigned()->index();
            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');

            $table->string('gaji');
            $table->string('sistem_kerja');
            $table->dateTime('tgl_kontrak');
            $table->dateTime('tgl_habiskontrak');
            $table->string('jenis_kelamin');
            $table->string('jumlah');
            $table->string('lulusan');
            $table->string('usia');
            $table->string('pengalaman');
            $table->integer('cek')->default(0)->nullable();

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('permintaans');
    }
}
