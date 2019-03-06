<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikans';
    protected $fillable =
    [
        'karyawan_id',
        'pendidikan',
        'nama_sekolah',
        'kota_formal',
        'jurusan',
        'mulai',
        'lulus'
    ];
    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan');
    }
}
