<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Permintaan;
use App\Jabatan;
use App\Karyawan;

class AttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permintaan = Permintaan::latest()
                    ->paginate(10);

        return view('request', compact('permintaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawans = Karyawan::where('category_id', '=', '2')->get();
        $jabatans = Jabatan::all();
        return view('karyawans.kAktif', compact('karyawans', 'jabatans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        if($request->has(['buah']) && $request->buah != null){
          global $app;
          return response()->json(['buah' => $request->buah]);
        }
        else return 'Not valid id.';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permintaan $permintaan)
    {
        $permintaan = Permintaan::latest()
                    ->paginate(10);
        $karyawan = Karyawan::all();

        return view('request')
               ->with('permintaan', $permintaan)
               ->with('karyawanall', Karyawan::all())
               ->with('karyawan',  $karyawan)
               ->with('karyawan',  $karyawan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
