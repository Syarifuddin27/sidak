<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_karyawan', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('karyawan_id')->unsigned()->index();
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');

            $table->integer('doc_id')->unsigned()->index();
            $table->foreign('doc_id')->references('id')->on('docs')->onDelete('cascade');
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
        Schema::dropIfExists('doc_karyawan');
    }
}
