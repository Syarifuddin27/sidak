<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawanPermintaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_permintaan', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('permintaan_id')->unsigned()->index();
            $table->foreign('permintaan_id')->references('id')->on('permintaans')->onDelete('cascade');

            $table->integer('karyawan_id')->unsigned()->index();
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');
            
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
        Schema::dropIfExists('karyawan_permintaan');
    }
}
