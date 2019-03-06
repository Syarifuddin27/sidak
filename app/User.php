<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
    public function karyawan()
    {
        return $this->hasMany('App\Karyawan');
    }

    // public function verify()
    // {
    //     return $this->hasMany('App\Verify');
    // }

    public function permintaaan()
    {
        return $this->hasMany('App\Permintaan');
    }

}
