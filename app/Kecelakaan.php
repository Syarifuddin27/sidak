<?php

namespace App;

use App\Kecelakaan;
use App\Karyawan;
use Illuminate\Database\Eloquent\Model;

class Kecelakaan extends Model
{
    protected $table = 'kecelakaans';
    protected $dates = 
    [
        'tgl_kec'
    ];
    protected $fillable =
    [
        'karyawan_id',
        'tgl_kec',
        'karena',
        'keterangan'
        
    ];
    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan');
    }
}
