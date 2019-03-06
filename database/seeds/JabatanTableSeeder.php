<?php

use Illuminate\Database\Seeder;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatans')->insert([

            ['name' => 'ADMIN'],
            ['name' => 'KARU ESB'],
            ['name' => 'CS'],
            ['name' => 'GUDANG'],
            ['name' => 'KARU GILING'],
            ['name' => 'GILING'],
            ['name' => 'MIXER'],
            ['name' => 'EVA 1'],
            ['name' => 'EVA 2'],
            ['name' => 'EVA 3'],
            ['name' => 'SERI EVA'],
            ['name' => 'BAHAN EVA'],
            ['name' => 'KARU INJECT'],
            ['name' => 'INJECT 1'],
            ['name' => 'INJECT 2'],
            ['name' => 'INJECT 3'],
            ['name' => 'SERI INJECT'],
            ['name' => 'SABLON'],
            ['name' => 'JAPIT'],
            ['name' => 'TARIK'],
            ['name' => 'TEMPEL'],
            ['name' => 'VARIASI 1'],
            ['name' => 'VARIASI 2'],
            ['name' => 'PACKING'],
            ['name' => 'QC'],
            ['name' => 'TEKNIK'],
            ['name' => 'MATRAS'],
            ['name' => 'SATPAM'],
            ['name' => 'TRAINING CAT'],

        ]);
    }
}
