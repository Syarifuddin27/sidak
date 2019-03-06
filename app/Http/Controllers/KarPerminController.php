<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KaryawanPermintaan;
use App\Permintaan;
use App\Karyawan;
use App\Category;

class KarPerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // search
    public function create(Request $request)
    {
        $a = $request->id;
        if ($a == '') {
            return response()->json('Data Kosong');
        } else {
            # code...
            $ambil = Karyawan::where('nama', 'like', '%' .$a. '%')->get();
            return response()->with('ambil', json_decode($ambil, true));
        }
        

        // return response()->json('A :' => $request->id);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kry  = array();

        $kondisi = false;

        while ($kondisi == false) {
          $kry = explode(",", $request->idK);    
          $kondisi = true;
        }

        foreach ($kry as $key => $value) {
            KaryawanPermintaan::create([
                'permintaan_id' => $request->idP,
                'karyawan_id' => $value
            ]);
        }

       return response()->json('Data Berhasil di Tambah.');
    }
          
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        echo $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // $id = $request->id;
        $ketemu = KaryawanPermintaan::find($id);

        $ketemu->delete();


    }
    
    public function upStore(Request $request)
    {

        $karyawan = Karyawan::find($request->id);
        $karyawan->kode_absen = $request->kode_absen;
        $karyawan->category_id = $request->category;
        $karyawan->jabatan_id = $request->idJabatan;
        $karyawan->sistem_kerja = $request->sistem_kerja;
        $karyawan->save();
        // flashy()->success('Data Berhasil di Update.');
        return response()->json(['Masuk Pak Eko' => $request->id]);
    }
}
