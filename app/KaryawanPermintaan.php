<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryawanPermintaan extends Model
{
    protected $table = 'karyawan_permintaan';
    protected $fillable = ['permintaan_id', 'karyawan_id'];

    public function permintaan()
    {
    	return $this->belongsTo('App\Permintaan');
    }
    public function karyawan()
    {
    	return $this->belongsTo('App\Karyawan');
    }

   
}
