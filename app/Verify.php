<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verify extends Model
{
	protected $table = 'verifies';
	protected $fillable = ['karyawan_id', 'name'];

    public function karyawan()
    {
    	return $this->belngsTo('App\Karyawan');
    }
}
