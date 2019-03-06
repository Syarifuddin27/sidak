<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Profile;
use App\Karyawan;
use App\Jabatan;
use App\Permintaan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kry = DB::table("karyawans")
                ->select(DB::raw("COUNT(*) as new_member"))
                ->orderBy("created_at")
                ->groupBy(DB::raw("month(created_at)"))
                ->get();
        $lable =   DB::table("karyawans")  
                     ->select(DB::raw("MONTHNAME(created_at) as bulan"))->distinct()->get();

                     // echo $lable;

        flashy()->success('Selamat Datang di SIDAK');
        return view('home')
                ->with('user', Auth::user())
                ->with('jumlahK', Karyawan::where('cek', '=', '0')->count())
                ->with('jumlahD', Jabatan::all()->count())
                ->with('jumlahP', Permintaan::all()->count())
                ->with('kry', $kry)
                ->with('lable', $lable )
                ;
                

    }
}
