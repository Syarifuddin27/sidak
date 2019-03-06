<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $table = 'pengalamen';
    protected $fillable =
    [
        'karyawan_id',
        'nama_perusahaan',
        'alamat_perusahaan',
        'bidang_usaha',
        'jabatan',
        'gaji',
        'mulai_kerja',
        'akhir_kerja',
        'alasan'
    ];
    public function karyawans()
    {
        return $this->belongsTo('App\Karyawan');
    }
}
