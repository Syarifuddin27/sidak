<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis';
    protected $fillable =
    [
        'karyawan_id',
        'tanggal_awal',
        'tanggal_akhir',
        // 'tanggal',
        'sebab',
        'keterangan'

    ];
    protected $dates = [
        'tanggal_awal',
        'tanggal_akhir'
    ];

    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
