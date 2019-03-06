<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $table = 'docs';
    protected $fillable = [
        'doc'
    ];
    public function karyawans()
    {
        return $this->belongsToMany('App\Karyawan');
    }
}
