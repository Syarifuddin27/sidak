<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sp extends Model
{
    protected $table = 'sps';
    protected $dates = 
    [
        'tanggal'
    ];
    protected $fillable =
    [
        'karyawan_id',
        'status',
        'tanggal',
        'keterangan'
        
    ];
    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan');
    }
}
