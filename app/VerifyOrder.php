<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyOrder extends Model
{
    protected $table = 'verify_orders';
	protected $fillable = ['permintaan_id', 'name'];

    public function permintaan()
    {
    	return $this->belngsTo('App\Permintaan');
    }
}
