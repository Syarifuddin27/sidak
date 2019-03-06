<?php

use Illuminate\Database\Seeder;

class DocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docs')->insert([

        ['doc' => 'KTP'],
        ['doc' => 'IJAZAH'],
        ['doc' => 'AKTE'],
        ['doc' => 'FOTO'],
        ['doc' => 'SURAT LAMARAN'],
        ['doc' => 'DAFTAR RIWAYAT HIDUP'],
        ['doc' => 'KARTU KELUARGA (KK)'],
        ['doc' => 'SKCK'],
        ['doc' => 'SURAT KETERANGNA DOKTER'],

    ]);
    }
}
