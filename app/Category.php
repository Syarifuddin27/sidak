<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function karyawans()
    {
        return $this->hasMany('App\Karyawan');
    }
    protected $table = 'categories';
    protected $fillable = [
        'name'
    ];
}
