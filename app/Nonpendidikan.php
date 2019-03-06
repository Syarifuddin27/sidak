<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nonpendidikan extends Model
{
    protected $table = 'nonpendidikans';
    protected $fillable =
        [
        'jenis_pendidikan',
        'lembaga',
        'kota',
        'tahun',
        'durasi',
    ];

    public function karyawans()
    {
        return $this->belongsTo('App\Karyawan');
    }
}
