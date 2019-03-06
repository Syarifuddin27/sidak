<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Karyawan extends Model
{
    protected $table = 'karyawans';
    protected $dates = [

        'tgl_melamar',
        'tgl_lahir'
    ];
    protected $fillable =
    ['id','image','tgl_melamar','kategori','noktp','nama','umur','slug','jenis_kelamin','agama','tempat_lahir','tgl_lahir','warganegara','status','provinsi','kabupaten','kecamatan','desa','alamat_lengkap','alamat_kos','nama_ibu','nokk','jumlah_anak','nohp','berat_badan','tinggi_badan','nama_wali','alamat_wali','nohp_wali','dapat_bekerja','jabatan_id','category_id','order_number'
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function karyawanpermintaan()
    {
        return $this->hasMany('App\KaryawanPermintaan');
    }

    public function absensi()
    {
        return $this->hasOne('App\Absensi');
    }

    public function verify()
    {
        return $this->HasOne('App\Verify');
    }
    public function docs()
    {
        return $this->belongsToMany('App\Doc');
    }


    public function pendidikan()
    {
        return $this->hasOne('App\Pendidikan');
    }


    public function nonpendidikan()
    {
        return $this->hasOne('App\Nonpendidikan');
    }


    public function pengalaman()
    {
        return $this->hasOne('App\Pengalaman');
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function jabatan()
    {
        return $this->belongsTo('App\Jabatan');
    }

    public function pkwt()
    {
        return $this->hasOne('App\Pkwt');
    }


    public function sp()
    {
        return $this->hasOne('App\Sp');
    }


    public function kecelakaan()
    {
        return $this->hasOne('App\kecelakaan');
    }

    public function permintaan()
    {
        return $this->belongsToMany('App\Permintaan');
    }


    public function scopeSearch($qQ, $s)
    {
        return $qQ->where('order_number', 'like', '%' .$s. '%')
                  ->orWhere('kategori', 'like', '%' .$s. '%')
                  ->orWhere('noktp', 'like', '%' .$s. '%')
                  ->orWhere('nama', 'like', '%' .$s. '%')
                  ->orWhere('umur', 'like', '%' .$s. '%')
                  ->orWhere('jenis_kelamin', 'like', '%' .$s. '%')
                  ->orWhere('agama', 'like', '%' .$s. '%')
                  ->orWhere('tempat_lahir', 'like', '%' .$s. '%')
                  ->orWhere('warganegara', 'like', '%' .$s. '%')
                  ->orWhere('status', 'like', '%' .$s. '%')
                  ->orWhere('provinsi', 'like', '%' .$s. '%')
                  ->orWhere('kabupaten', 'like', '%' .$s. '%')
                  ->orWhere('kecamatan', 'like', '%' .$s. '%')
                  ->orWhere('desa', 'like', '%' .$s. '%')
                  ->orWhere('alamat_lengkap', 'like', '%' .$s. '%')
                  ->orWhere('alamat_kos', 'like', '%' .$s. '%')
                  ->orWhere('nama_ibu', 'like', '%' .$s. '%')
                  ->orWhere('nokk', 'like', '%' .$s. '%')
                  ->orWhere('jumlah_anak', 'like', '%' .$s. '%')
                  ->orWhere('nohp', 'like', '%' .$s. '%')
                  ->orWhere('berat_badan', 'like', '%' .$s. '%')
                  ->orWhere('tinggi_badan', 'like', '%' .$s. '%')
                  ->orWhere('nama_wali', 'like', '%' .$s. '%')
                  ->orWhere('nohp_wali', 'like', '%' .$s. '%')
                  ->orWhere('dapat_bekerja', 'like', '%' .$s. '%');
    }

    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'order_number' => [
                'format' => 'SDK?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 5 // The number of digits in an autonumber
            ]
        ];
    }

    // public function getAutoNumberOptions()
    // {
    //     return [
    //     'order_number' =>
    //     [
    //         'format' => function()
    //         {
    //             return 'S27/' . date('Ymd') . '/?'; // autonumber format. '?' will be replaced with the generated number.
    //         },
    //             'length' => 5 // The number of digits in the autonumber
    //         ]
    //     ];
    // }
}
