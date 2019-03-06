<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Pkwt;
use App\Karyawan;
use Illuminate\Http\Request;

class PkwtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $no = 1;
        $s = $request->input('s');


        $pkwts = Pkwt::where('tgl_awal', '!=', 0)
                     ->search($s)
                     ->paginate(25);
                    
        return view('pkwt.index', compact('pkwts', 's', 'no'))
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
        $pkwt = Pkwt::all();

        return view('pkwt.create')
            ->with('karyawans', Karyawan::where('category_id', '=', '2')->get())
            ->with('pkwt', $pkwt);
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
            'type' => 'required',
            'tgl_awal' => 'required',
            'tgl_sampai' => 'required',
            'note' => 'required'

        ]);

        $pkwt = New Pkwt;
        $pkwt->karyawan_id = $request->karyawan_id;
        $pkwt->type = $request->type;
        $pkwt->tgl_awal = Carbon::parse($request->tgl_awal);
        $pkwt->tgl_sampai = Carbon::parse($request->tgl_sampai);
        $pkwt->note = $request->note;
        $pkwt->save();

        flashy()->info('PKWT Karyawan Berhasil di Buat');
        return redirect('/admin/pkwt');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pkwt  $pkwt
     * @return \Illuminate\Http\Response
     */
    public function show(Pkwt $pkwt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pkwt  $pkwt
     * @return \Illuminate\Http\Response
     */
    public function edit(Pkwt $pkwt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pkwt  $pkwt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pkwt $pkwt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pkwt  $pkwt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pkwt $pkwt)
    {
        //
    }
}
