<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Permintaan extends Model
{
    protected $table = 'permintaans';
    protected $fillable = [
        'unit',
        'tgl_order',
        'no_spk',
        'bertemu',
        'gaji',
        'bukti_tertulis',
        'sistem_kerja',
        'tgl_kontrak',
        'tgl_habiskontrak',
        'jenis_kelamin',
        'bagian',
        'jumlah',
        'lulusan',
        'usia',
        'pengalaman'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'tgl_order',
        'tgl_kontrak',
        'tgl_habiskontrak',
    ];
    public function jabatan()
    {
        return $this->belongsTo('App\Jabatan');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function verifyOrder()
    {
        return $this->HasOne('App\VerifyOrder');
    }

    public function karyawanpermintaan()
    {
        return $this->hasMany('App\KaryawanPermintaan');
    }

    public function karyawans()
    {
        return $this->belongsToMany('App\Karyawan');
    }

    public function scopeSearch($qQ, $s)
    {
        return $qQ->where('order_number', 'like', '%' .$s. '%')
                    ->orwhere('unit' , 'like', '%' .$s. '%')
                    ->orwhere('tgl_order' , 'like', '%' .$s. '%')
                    ->orwhere('no_spk' , 'like', '%' .$s. '%')
                    ->orwhere('bertemu' , 'like', '%' .$s. '%')
                    ->orwhere('gaji' , 'like', '%' .$s. '%')
                    ->orwhere('bukti_tertulis' , 'like', '%' .$s. '%')
                    ->orwhere('sistem_kerja' , 'like', '%' .$s. '%')
                    ->orwhere('tgl_kontrak' , 'like', '%' .$s. '%')
                    ->orwhere('tgl_habiskontrak' , 'like', '%' .$s. '%')
                    ->orwhere('jenis_kelamin' , 'like', '%' .$s. '%')
                    ->orwhere('jumlah' , 'like', '%' .$s. '%')
                    ->orwhere('lulusan' , 'like', '%' .$s. '%')
                    ->orwhere('usia' , 'like', '%' .$s. '%')
                    ->orwhere('pengalaman' , 'like', '%' .$s. '%');

    }


    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
        'order_number' =>
        [
            'format' => function()
            {
                return 'MJA/' . date('m') . '/?'; // autonumber format. '?' will be replaced with the generated number.
            },
                'length' => 5 // The number of digits in the autonumber
            ]
        ];
    }
}
