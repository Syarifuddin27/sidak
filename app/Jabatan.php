<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatans';
    protected $fillable = [
        'name'
    ];
    public function karyawans()
    {
        return $this->hasMany('App\Karyawan');
    }
    public function permintaan()
    {
        return $this->hasMany('App\Permintaan');
    }

    public function scopeSearch($qQ, $s)
    {
        return $qQ->where('name', 'like', '%' .$s. '%');
    }

}
