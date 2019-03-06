<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sp;
use App\Karyawan;
use Carbon\Carbon;

class SpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $sp = Sp::where('tanggal', '!=', 0)->paginate(10);

        // echo $sp;

        // $sp = Sp::where('tanggal', != 0);
        // $sp = Sp::latest()->paginate(10);
        return view('sp.index', compact('sp', 'no'))
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
        $karyawans = Karyawan::all();
        $sp = Sp::all();

        return view('sp.create')
            ->with('karyawans', Karyawan::where('category_id', '=', '2')->orderBy('id', 'desc')->get())
            ->with('sp', $sp);
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
            'status' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ]);

        $sp = New Sp;
        $sp->karyawan_id = $request->karyawan_id;
        $sp->status= $request->status;
        $sp->tanggal = Carbon::parse($request->tanggal);
        $sp->keterangan = $request->keterangan;
        $sp->save();

        flashy()->info('SP Karyawan berhasil dibuat');
        return redirect('/admin/sp');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function show(Sp $sp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function edit(Sp $sp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sp $sp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sp  $sp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sp $sp)
    {
        //
    }
}
