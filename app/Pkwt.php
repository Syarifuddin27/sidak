<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Carbon\Carbon;
class Pkwt extends Model
{
    protected $table = 'pkwts';
    protected $dates = 
    [
        'tgl_awal', 'tgl_sampai'
    ];
    protected $fillable =
    [
        'karyawan_id',
        'type',
        'tgl_awal',
        'tgl_sampai',
        'note'
    ];

    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan');
    }
    public function scopeSearch($qQ, $s)
    {
        return $qQ->where('karyawan_id', 'like', '%' .$s. '%');
    }
}
