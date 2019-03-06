<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number');
            $table->string('image')->nullable();
            $table->dateTime('tgl_melamar');
            $table->string('kategori');

            $table->integer('jabatan_id')->unsigned()->index();
            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');

            $table->string('noktp');
            $table->string('nama');
            $table->string('umur');
            $table->string('slug')->nullable();
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->dateTime('tgl_lahir');
            $table->string('warganegara');
            $table->string('status');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->text('alamat_lengkap');
            $table->text('alamat_kos')->nullable();
            $table->string('nama_ibu');
            $table->string('nokk');
            $table->string('jumlah_anak')->nullable();
            $table->string('nohp');
            $table->string('berat_badan')->nullable();
            $table->string('kode_absen')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('nama_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('nohp_wali')->nullable();
            $table->string('dapat_bekerja');
            $table->integer('cek')->default(0)->nullable();

            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');


            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('karyawans');
    }
}
