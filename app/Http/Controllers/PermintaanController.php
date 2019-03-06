<?php

namespace App\Http\Controllers;
use Auth;
use Carbon\Carbon;
use App\User;
use App\Permintaan;
use App\Category;
use App\Jabatan;
use App\Karyawan;
use App\KaryawanPermintaan;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $no = 1;
        $noK = 1;
        $s = $request->input('s');
        $c = $request->input('c');
        $pNconfir = Permintaan::where('cek', '=', '0')->count();
        $konfir = Permintaan::where('cek', '=', '1')->count();
        // $cPermin = Permintaan::where
        $permintaan = Permintaan::latest()
                    ->search($s)
                    ->paginate(10);

        // $jabatan = Jabatan::latest()
        //                 ->search($c)
        //                 ->paginate(20);

        return view('permintaans.index', compact('permintaan', 's', 'no', 'noK', 'c'))
            ->with('i', (request()->input('page', 1) - 1) * 5)
            ->with('pNconfir', $pNconfir)
            ->with('konfir', $konfir)
            ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $karyawans = Karyawan::paginate(50);
        $jabatan = Jabatan::all();
        return view('permintaans.create')
              ->with('jabatans', $jabatan)
              ->with('karyawans', $karyawans)
              ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'unit' => 'required',
            'tgl_order' => 'required',
            'no_spk' => 'required',
            'bertemu' => 'required',
            'jabatan_id' => 'required',
            'gaji' => 'required',
            'sistem_kerja' => 'required',
            'tgl_kontrak' => 'required',
            'tgl_habiskontrak' => 'required',
            'jenis_kelamin' => 'required',
            'jumlah' => 'required',
            'lulusan' => 'required',
            'usia' => 'required',
            'pengalaman' => 'required',

        ]);

        $permintaan = new Permintaan;
        $permintaan->bukti_tertulis = $request->bukti_tertulis;
        $permintaan->unit = $request->unit;
        $permintaan->tgl_order = Carbon::parse($request->tgl_order);
        $permintaan->no_spk = $request->no_spk;
        $permintaan->bertemu = $request->bertemu;
        $permintaan->jabatan_id = $request->jabatan_id;
        $permintaan->gaji = $request->gaji;
        $permintaan->sistem_kerja = $request->sistem_kerja;
        $permintaan->tgl_kontrak = Carbon::parse($request->tgl_kontrak);
        $permintaan->tgl_habiskontrak = Carbon::parse($request->tgl_habiskontrak);
        $permintaan->jenis_kelamin = $request->jenis_kelamin;
        $permintaan->jumlah = $request->jumlah;
        $permintaan->lulusan = $request->lulusan;
        $permintaan->usia = $request->usia;
        $permintaan->pengalaman = $request->pengalaman;
        $permintaan->user_id = Auth::id();

        // foreach ($request->karyawans as $key => $value) {
        //     $permintaan->attach($value);
        // }
        $permintaan->save();
        $permintaan->karyawans()->attach($request->karyawan);
        flashy()->info('Permintaan Karyawan Berhasil di Buat');
        return redirect('admin/permintaan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function show(Permintaan $permintaan)
    {
        $karyawan = Karyawan::all();
        $karpermin = KaryawanPermintaan::with(['permintaan', 'karyawan'])->get();
        // $permintaan = Permintaan::with()
        // echo $karpermin->id;
        // dd($karpermin);

        return view('permintaans.show')
               ->with('permintaan', $permintaan)
               ->with('categories', Category::all())
               // ->with('karyawanall', Karyawan::all())
               ->with('karyawan',  $karyawan)
               ->with('karpermin', KaryawanPermintaan::all())
               ;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Permintaan $permintaan)
    {
        return view('permintaans.edit', compact('permintaan'))
                                        // ->with('karyawan', Karyawan::where('category_id', '=', '2'))
                                        ->with('jabatans', Jabatan::all())
                                        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
         $this->validate($request, [
            'unit' => 'required',
            'tgl_order' => 'required',
            'bertemu' => 'required',
            'jabatan_id' => 'required',
            'gaji' => 'required',
            'sistem_kerja' => 'required',
            'tgl_kontrak' => 'required',
            'tgl_habiskontrak' => 'required',
            'jenis_kelamin' => 'required',
            'jumlah' => 'required',
            'lulusan' => 'required',
            'usia' => 'required',
            'pengalaman' => 'required',

        ]);

        $permintaan = Permintaan::find($id);
        $permintaan->bukti_tertulis = $request->bukti_tertulis;
        $permintaan->unit = $request->unit;
        $permintaan->tgl_order = Carbon::parse($request->tgl_order);
        $permintaan->no_spk = $request->no_spk;
        $permintaan->bertemu = $request->bertemu;
        $permintaan->jabatan_id = $request->jabatan_id;
        $permintaan->gaji = $request->gaji;
        $permintaan->sistem_kerja = $request->sistem_kerja;
        $permintaan->tgl_kontrak = Carbon::parse($request->tgl_kontrak);
        $permintaan->tgl_habiskontrak = Carbon::parse($request->tgl_habiskontrak);
        $permintaan->jenis_kelamin = $request->jenis_kelamin;
        $permintaan->jumlah = $request->jumlah;
        $permintaan->lulusan = $request->lulusan;
        $permintaan->usia = $request->usia;
        $permintaan->pengalaman = $request->pengalaman;

        $permintaan->save();
        flashy()->info('Permintaan Karyawan Berhasil di Buat');
        
        return redirect('admin/permintaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permintaan $permintaan)
    {
        //
    }
    // public function cek(Request $request, Permintaan $permintaan)
    // {
    //     if ($permintaan->cek == 0) {
    //         $permintaan->cek = 1;
    //     }
    //     $permintaan->save();

    //     return redirect()->back();
    // }
    public function jumlah($value='')
    {
        $count = Permintaan::with('KaryawanPermintaan')->get();
        // dd($count);
        // $count->karyawan_permintaan->count();

        foreach ($count as $ct) {
            echo $ct->karyawanpermintaan->count();

        }
    }

}
