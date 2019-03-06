<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensi;
use App\Jabatan;
use App\Karyawan;
use App\Kecelakaan;
use App\Nonpendidikan;
use App\Pendidikan;
use App\Pengalaman;
use App\Pkwt;
use App\Sp;
use Yajra\DataTables\DataTables;
use App\Verify;

class FrontEndController extends Controller
{
    public function singlePost($slug)
    {
        $no = 1;
        $noP = 1;
        $noS = 1;
    	$noK = 1;
    	$karyawan = Karyawan::where('slug', $slug)->first();
        $id = $karyawan->id; 
    	$absensi = Absensi::whereRaw('karyawan_id ='. $id . ' and tanggal_awal != '. 0)->orderBy('tanggal_awal','desc')->paginate(30);
        $pkwt = Pkwt::whereRaw('karyawan_id ='. $id . ' and tgl_awal != '. 0)->paginate(10);
        $sp = Sp::whereRaw('karyawan_id ='. $id . ' and tanggal != '. 0)->paginate(10);
        $kecelakaan = Kecelakaan::whereRaw('karyawan_id ='. $id . ' and tgl_kec != '. 0)->paginate(10);


    	return view('index2', compact('no', 'noP', 'noS', 'noK'))
    		   // ->with('no', $no)
    		   ->with('karyawan', $karyawan)
               ->with('absensi', $absensi)
               ->with('pkwt', $pkwt)
               ->with('sp', $sp)
    		   ->with('kecelakaan', $kecelakaan)
    	;
    }
    // public function ApiAbsenFront($slug)
    // {
    //     $karyawan = Karyawan::where('slug', $slug)->first();
    //     $id = $karyawan->id; 
    //     $absensi = Absensi::whereRaw('karyawan_id ='. $id . ' and tanggal_awal != '. 0)->get();
        
    //     return Datatables::of($absensi)->make(true);
    // }
}
