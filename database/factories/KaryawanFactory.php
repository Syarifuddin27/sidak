<?php

use Faker\Generator as Faker;

$factory->define(App\Karyawan::class, function (Faker $faker) {
    return [
        'order_number' => $faker->order_number,
        'image' => $faker->image,
        'tgl_melamar' => $faker->tgl_melamar,
        'kategori' => $faker->kategori,
        'jabatan' => $faker->jabatan,
        'noktp' => $faker->noktp,
        'nama' => $faker->nama,
        'jenis_kelamin' => $faker->jenis_kelamin,
        'agama' => $faker->agama,
        'tempat_lahir' => $faker->tempat_lahir,
        'tgl_lahir' => $faker->tgl_lahir,
        'warganegara' => $faker->warganegara,
        'status' => $faker->status,
        'provinsi' => $faker->provinsi,
        'kabupaten' => $faker->kabupaten,
        'kecamatan' => $faker->kecamatan,
        'desa' => $faker->desa,
        'alamat_lengkap' => $faker->alamat_lengkap,
        'alamat_kos' => $faker->alamat_kos,
        'nama_ibu' => $faker->nama_ibu,
        'nokk' => $faker->nokk,
        'jumlah_anak' => $faker->jumlah_anak,
        'nohp' => $faker->nohp,
        'berat_badan' => $faker->berat_badan,
        'tinggi_badan' => $faker->tinggi_badan,
        'nama_wali' => $faker->nama_wali,
        'alamat_wali' => $faker->alamat_wali,
        'nohp_wali' => $faker->nohp_wali,
        'dapat_bekerja' => $faker->dapat_bekerja,
        'mulai_kerja' => $faker->mulai_kerja,
    ];
});
