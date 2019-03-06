<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecelakaan;
use App\Karyawan;
use Carbon\Carbon;

class KecelakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecelakaan = Kecelakaan::where('tgl_kec', '!=', 0)->paginate(10);
        
        $no = 1;
        // $kecelakaan = Kecelakaan::latest()->paginate(10);
        return view('kecelakaan.index', compact('kecelakaan', 'no'))
            ->with('i', (request()->input('page', 1) -1) *5)
            ->with('karyawans', Karyawan::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $karyawans = Karyawan::all();
        $kecelakaan = Kecelakaan::all();

        return view('kecelakaan.create')
            ->with('karyawans', Karyawan::where('category_id', '=', '2')->get())
            ->with('kecelakaan', $kecelakaan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_kec' => 'required',
            'karena' => 'required',
            'keterangan' => 'required'
        ]);

        $kecelakaan = New Kecelakaan;
        $kecelakaan->karyawan_id = $request->karyawan_id;
        $kecelakaan->tgl_kec = Carbon::parse($request->tgl_kec);
        $kecelakaan->karena = $request->karena;
        $kecelakaan->keterangan = $request->keterangan;
        $kecelakaan->save();

        flashy()->info('Data Kecelakaan Berhasil di Buat');
        return redirect('/admin/kecelakaan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kecelakaan  $kecelakaan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecelakaan $kecelakaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kecelakaan  $kecelakaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kecelakaan $kecelakaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kecelakaan  $kecelakaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecelakaan $kecelakaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kecelakaan  $kecelakaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kecelakaan $kecelakaan)
    {
        //
    }
}
