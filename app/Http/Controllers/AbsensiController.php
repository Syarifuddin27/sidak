<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Absensi;
use App\Karyawan;
use Calendar;
use App\Event;
use App\Jabatan;
use Yajra\DataTables\DataTables;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color;
        $bg;
        $attend = [];
        $data = Absensi::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                if ($value->sebab == 'A') {
                    $color = '#FF0000';
                    $bg = '#FF0000';
                }

                elseif ($value->sebab == 'I') {
                     $color = '#FFFF00';
                     $bg = '#FFFF00';
                }

                else {
                    $color = '#ffffff';
                    $bg = '#d9edf7';
                }

                $attend[] = Calendar::event(
                    $value->sebab,
                    true,
                    new \DateTime($value->tanggal_awal),
                    new \DateTime($value->tanggal_akhir.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => $bg,
                        'backgroundColor' => $color,
                        // 'url' => '/admin/absensi/create',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($attend);

        $absensi = Absensi::all();

        return view('absensi.index', compact('absensi', 'calendar'))
            ->with('i', (request()->input('page', 1) -1) *5)
            ;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DB::table('name')->where('name', '=', 'John')->get();

        // $karyawans = Karyawan::all();

        $absensi = Absensi::all();

        return view('absensi.create')
            // ->with('karyawans', $karyawans)
            ->with('karyawans', Karyawan::where('category_id', '=', '2')->get())
            ->with('jabatans', Jabatan::all())
            ->with('absensi', $absensi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'tanggal_awal' => 'required',
            // 'sebab' => 'required',
        ]);


        // $attendance = [];
        // $ktr = "";
        $absensi = $request->except('_token', 'jabatan_id', 'sistem_kerja', 'tanggal_awal', 'karyawans-table_length', 'keterangan');
        
        // foreach ($request->keterangan as $key => $value) 
        // {
        //     $ktr .= $value;
        // }
       
           foreach ($absensi as $ID => $status) 
           {
                $attendance[] = [
                'karyawan_id' => $ID,
                'tanggal_awal' => Carbon::parse($request->tanggal_awal),
                'tanggal_akhir' => Carbon::parse($request->tanggal_awal),
                'sebab' => $status,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 'keterangan' => $status++ $request->keterangan
             ];
           }
           foreach ($request->keterangan as $key => $value) {
               $attendance[$key][] = $value;
           }
           foreach ($attendance as $key) {
                $abs = new Absensi;
               $abs->karyawan_id = $key['karyawan_id'];
               $abs->tanggal_awal = $key['tanggal_awal'];
               $abs->tanggal_akhir = $key['tanggal_akhir'];
               $abs->sebab = $key['sebab'];
               $abs->keterangan = $key[0];
               // dd($key['karyawan_id']);
               $abs->save();
           }
           // dd($attendance);
           // dd($key);

        // dd($attendance);
        // // dd($request->keterangan);
        // dd($absensi);
        // echo $request->keterangan;
        
        // foreach ($absensi as $ID => $status) {
                
           
        // }

        // dd($attendance);
        // Absensi::insert($attendance);

        return redirect()->route('absensi.index');



        // $absensi = New Absensi;
        // $absensi->karyawan_id = $request->karyawan_id;
        // $absensi->tanggal_awal = Carbon::parse($request->tanggal_awal);
        // $absensi->tanggal_akhir = Carbon::parse($request->tanggal_awal);
        // $absensi->sebab = $request->sebab;
        // $absensi->keterangan = $request->keterangan;
        // $absensi->save();

        // flashy()->info('Absensi Berhasil di update');

        // return redirect('/admin/absensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
    public function ApiAbsen()
    {
        // $absen = Absensi::select(['karyawan_id', 'tanggal_awal'])->with(['karyawan'])->get();
        $absen = Absensi::with([
            'karyawan',
            // 'jabatan'
        ])->get();
        return Datatables::of($absen)->make(true);
    }
}