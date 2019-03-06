<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Auth;
use App\User;
use App\Pendidikan;
use App\Nonpendidikan;
use App\Pengalaman;
use App\Jabatan;
use App\Doc;
use App\Karyawan;
use App\Category;
use App\Kecelakaan;
use App\Absensi;
use App\Pkwt;
use App\Sp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use File;
use PDF;
use DB;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // nomor urut di Calon Karyawan
        $no = 1;
        // nomor urut di Karyawan Sudah Di Konfirmasi
        $noV = 1;
        // nomor urut di Karyawan Aktif
        $noA = 1;
        // nomor urut di Karyawan Resign
        $noR = 1;
        // $a = $request->id;
        $s = $request->input('s');
        // if ($a == '') {
        //    $ambil = Karyawan::all();
        // } else {
        //     $ambil = Karyawan::where('nama', 'like', '%' .$a. '%')->get();
        // }


        // $cek = Karyawan::where('cek', != 0)->get();
        // echo $cek;
            $konfir = Karyawan::whereRaw('cek = 1 and category_id = 1')->count();
            $aktif = Karyawan::where('category_id', '=', '2')->count();
            $res = Karyawan::where('category_id', '=', '3')->count();

       
        $karyawan = Karyawan::orderBy('id', 'desc')
                            ->search($s)
                            ->paginate(50);

        return view('karyawans.index', compact('karyawan', 's', 'no', 'noV', 'noA', 'noR'))
            ->with('i', (request()->input('page', 1) - 1) * 5)
            // ->with('ambil', json_decode($ambil, true))
            ->with('cBaru', Karyawan::where('cek', '=', '0')->count())
            ->with('konfir', $konfir)
            ->with('aktif', $aktif)
            ->with('res', $res)
            ;
    }

    // public function cariKaryawan(Request $request)
    // {
    //     $a = $request->id;
    //     if ($a == '') {
    //         return response()->json('Data Kosong');
    //     } else {
    //         # code...
    //         $ambil = Karyawan::where('nama', 'like', '%' .$a. '%')->get();
    //         return response()->with('ambil', json_decode($ambil, true));        }
        

    //     // return response()->json('A :' => $request->id);

    // }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        $categories = Category::all();
        $docs = Doc::all();
        $pendidikans = Pendidikan::all();
        $nonpendidikans = Nonpendidikan::all();
        $pengalamans = Pengalaman::all();
        $jabatans = Jabatan::all();
        // $verifis = Verifi::all();

        // if ($categories->count() == 0 || $docs->count() == 0) {

        //     return redirect()->back();

        // }

        return view('karyawans.create')->with('categories', $categories)
                                       ->with('docs', $docs)
                                       ->with('pendidikans', $pendidikans)
                                       ->with('nonpendidikans', $nonpendidikans)
                                       ->with('pengalamans', $pengalamans)
                                       ->with('jabatans', $jabatans)
                                    //    ->with('verifis', $verifis)
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
        $this->validate($request, [
            // 'image' => 'required | mimes:jpeg,jpg,png | max:1000',
            'tgl_melamar' => 'required',
            'kategori' => 'required',
            'noktp' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'warganegara' => 'required',
            'status' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'alamat_lengkap' => 'required',
            'nama_ibu' => 'required',
            'nokk' => 'required',
            'nohp' => 'required',
            'dapat_bekerja' => 'required',
            'pendidikan' => 'required',
            'nama_sekolah' => 'required',
            'kota_formal' => 'required',
            'jurusan' => 'required',
            'mulai' => 'required',
            'lulus' => 'required',
            'pendidikan' => 'required',
            'nama_sekolah' => 'required',
            'kota_formal' => 'required',
            'mulai' => 'required',
            'lulus' => 'required',

        ]);

        $karyawan = new Karyawan;
        $pendidikan = new Pendidikan;
        $nonpendidikan = new Nonpendidikan;
        $pengalaman = new Pengalaman;
        $kecelakaan = new Kecelakaan;
        $absensi = new Absensi;
        $pkwt = new Pkwt;
        $sp = new Sp;

        if ($request->hasFile('image'))
        {
            $karyawan_image = $request->image;
            $karyawan_image_new_name = time() . $karyawan_image->getClientOriginalName();
            $karyawan_image->move('uploads/karyawans', $karyawan_image_new_name);

            $karyawan->image = 'uploads/karyawans/' . $karyawan_image_new_name;
        }


        $karyawan->tgl_melamar = Carbon::parse($request->tgl_melamar);
        $karyawan->kategori = $request->kategori;
        $karyawan->noktp = $request->noktp;
        $karyawan->nama = $request->nama;
        $karyawan->umur = $request->umur;
        $karyawan->category_id = 1;
        $karyawan->jabatan_id = $request->jabatan_id;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->agama = $request->agama;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tgl_lahir = Carbon::parse($request->tgl_lahir);
        $karyawan->warganegara = $request->warganegara;
        $karyawan->status = $request->status;
        $karyawan->provinsi = $request->provinsi;
        $karyawan->kabupaten = $request->kabupaten;
        $karyawan->kecamatan = $request->kecamatan;
        $karyawan->desa = $request->desa;
        $karyawan->alamat_lengkap = $request->alamat_lengkap;
        $karyawan->alamat_kos = $request->alamat_kos;
        $karyawan->nama_ibu = $request->nama_ibu;
        $karyawan->nokk = $request->nokk;
        $karyawan->jumlah_anak = $request->jumlah_anak;
        $karyawan->nohp = $request->nohp;
        $karyawan->berat_badan = $request->berat_badan;
        $karyawan->tinggi_badan = $request->tinggi_badan;
        $karyawan->nama_wali = $request->nama_wali;
        $karyawan->alamat_wali = $request->alamat_wali;
        $karyawan->nohp_wali = $request->nohp_wali;
        $karyawan->dapat_bekerja = $request->dapat_bekerja;
        $karyawan->slug = str_slug($request->noktp);
        $karyawan->user_id = Auth::id();
        if ($karyawan->save())
        {
            $pendidikan->karyawan_id = $karyawan->id;
            $pendidikan->pendidikan = $request->pendidikan;
            $pendidikan->nama_sekolah = $request->nama_sekolah;
            $pendidikan->kota_formal = $request->kota_formal;
            $pendidikan->jurusan = $request->jurusan;
            $pendidikan->mulai = $request->mulai;
            $pendidikan->lulus = $request->lulus;
            if ($pendidikan->save())
            {
                $nonpendidikan->karyawan_id = $karyawan->id;
                $nonpendidikan->jenis_pendidikan = $request->jenis_pendidikan;
                $nonpendidikan->lembaga = $request->lembaga;
                $nonpendidikan->kota = $request->kota;
                $nonpendidikan->tahun = $request->tahun;
                $nonpendidikan->durasi = $request->durasi;
                if ($nonpendidikan->save())
                {
                    $pengalaman->karyawan_id = $karyawan->id;
                    $pengalaman->nama_perusahaan = $request->nama_perusahaan;
                    $pengalaman->alamat_perusahaan = $request->alamat_perusahaan;
                    $pengalaman->bidang_usaha = $request->bidang_usaha;
                    $pengalaman->jabatan = $request->jabatan;
                    $pengalaman->gaji = $request->gaji;
                    $pengalaman->mulai_kerja = Carbon::parse($request->mulai_kerja);
                    $pengalaman->akhir_kerja = Carbon::parse($request->akhir_kerja);
                    $pengalaman->alasan = $request->alasan;
                    $pengalaman->save();
                    if ($pengalaman->save())
                    {
                        $kecelakaan->karyawan_id = $karyawan->id;
                        if ($kecelakaan->save())
                        {
                            $absensi->karyawan_id = $karyawan->id;
                            if ($absensi->save())
                            {
                                $pkwt->karyawan_id = $karyawan->id;
                                if ($pkwt->save())
                                {
                                    $sp->karyawan_id = $karyawan->id;
                                    $sp->save();
                                }
                            }
                        }
                    }
                }
            }
        }
        $karyawan->docs()->attach($request->docs);

        flashy()->info('Data Karyawan Berhasil di Insert');
        return redirect('admin/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        // $absensi = Absensi::with('absensi')->orderBy('created_at', 'asc')->get();
        return view('karyawans.show', compact('karyawan', $karyawan));
                // ->with('absensi', Absensi::all());
                // ->with('absensi', Absensi::orderBy('created_at', 'asc')->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawans.edit', compact('karyawan'))
            ->with('categories', Category::all())
            ->with('docs', Doc::all())
            ->with('pendidikan', Pendidikan::orderBy('karyawan_id'))
            ->with('nonpendidikan', Nonpendidikan::all())
            ->with('jabatans', Jabatan::all())
            ;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);
        $karyawan = Karyawan::find($id);
        if ($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('uploads/karyawans', $image_new_name);

            $karyawan->image = 'uploads/karyawans/'. $image_new_name;
        }
        $karyawan->nama = $request->nama;
        $karyawan->noktp = $request->noktp;
        $karyawan->tgl_melamar = Carbon::parse($request->tgl_melamar);
        $karyawan->kategori = $request->kategori;
        $karyawan->nama = $request->nama;
        $karyawan->umur = $request->umur;
        $karyawan->jabatan_id = $request->jabatan_id;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->agama = $request->agama;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tgl_lahir = Carbon::parse($request->tgl_lahir);
        $karyawan->warganegara = $request->warganegara;
        $karyawan->status = $request->status;
        $karyawan->provinsi = $request->provinsi;
        $karyawan->kabupaten = $request->kabupaten;
        $karyawan->kecamatan = $request->kecamatan;
        $karyawan->desa = $request->desa;
        $karyawan->alamat_lengkap = $request->alamat_lengkap;
        $karyawan->alamat_kos = $request->alamat_kos;
        $karyawan->nama_ibu = $request->nama_ibu;
        $karyawan->nokk = $request->nokk;
        $karyawan->jumlah_anak = $request->jumlah_anak;
        $karyawan->nohp = $request->nohp;
        $karyawan->berat_badan = $request->berat_badan;
        $karyawan->tinggi_badan = $request->tinggi_badan;
        $karyawan->nama_wali = $request->nama_wali;
        $karyawan->alamat_wali = $request->alamat_wali;
        $karyawan->nohp_wali = $request->nohp_wali;
        $karyawan->dapat_bekerja = $request->dapat_bekerja;
        $karyawan->slug = str_slug($request->noktp);

            $karyawan->pendidikan->pendidikan = $request->pendidikan;
            $karyawan->pendidikan->nama_sekolah = $request->nama_sekolah;
            $karyawan->pendidikan->kota_formal = $request->kota_formal;
            $karyawan->pendidikan->jurusan = $request->jurusan;
            $karyawan->pendidikan->mulai = $request->mulai;
            $karyawan->pendidikan->lulus = $request->lulus;

                $karyawan->nonpendidikan->jenis_pendidikan = $request->jenis_pendidikan;
                $karyawan->nonpendidikan->lembaga = $request->lembaga;
                $karyawan->nonpendidikan->kota = $request->kota;
                $karyawan->nonpendidikan->tahun = $request->tahun;
                $karyawan->nonpendidikan->durasi = $request->durasi;

                    $karyawan->pengalaman->nama_perusahaan = $request->nama_perusahaan;
                    $karyawan->pengalaman->alamat_perusahaan = $request->alamat_perusahaan;
                    $karyawan->pengalaman->bidang_usaha = $request->bidang_usaha;
                    $karyawan->pengalaman->jabatan = $request->jabatan;
                    $karyawan->pengalaman->gaji = $request->gaji;
                    $karyawan->pengalaman->mulai_kerja = Carbon::parse($request->mulai_kerja);
                    $karyawan->pengalaman->akhir_kerja = Carbon::parse($request->akhir_kerja);
                    $karyawan->pengalaman->alasan = $request->alasan;

        $karyawan->docs()->sync($request->docs);
        $karyawan->save();
        $karyawan->pendidikan->save();
        $karyawan->nonpendidikan->save();
        $karyawan->pengalaman->save();
        flashy()->mutedDark('Data Karyawan Berhasil di update');
        return redirect('/admin/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        // return redirect('/admin/karyawan');
        flashy()->error('Data Karyawan Berhasil di Delete');
        return redirect()->back();
    }
    public function kryApi()
    {
        // $bulan = array();

        $kry = DB::table("karyawans")
                ->select(DB::raw("COUNT(*) as new_member"))
                ->orderBy("created_at")
                ->groupBy(DB::raw("month(created_at)"))
                ->get();
        $lable =   DB::table("karyawans")  
                     ->select(DB::raw("MONTHNAME(created_at) as bulan"))->distinct()->get();


        return response()->json($lable);
    }


    public function index2(){
        return view('karyawans.json');
    }



    public function apiKaryawan()
    {
        $kry = Karyawan::with([
            'jabatan',
            'user',
        ])->get();

        return Datatables::of($kry)
        // ->editColumn('user_id', '{!! str_limit($user, 60) !!}')
        ->addColumn('action', function($kry){
            return '<a href="#" class="btn btn-info btn-xs">
                        <i class="fa fa-eye"></i>
                    </a>'.
                    '<label>&nbsp;</label>'.
                    '<a onclick="editForm('. $kry->id . ')" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil">edit</i>
                    </a>'.
                    '<label>&nbsp;</label>'.
                    '<a onclick="deleteData('. $kry->id . ')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash-o"></i>
                    </a>';
        })->make(true);
    }

    public function pDf()
    {
        $karyawan = Karyawan::latest()->paginate(10);

        $pdf = PDF::loadView('pdf.index', compact('karyawan'));
        return $pdf->stream('document.pdf');
    }

    public function json(){
        // $kry = Karyawan::with([
        //     'jabatan',
        //     'user'
        // ])->get();
        // return Datatables::of($kry);
        return Datatables::of(Karyawan::with([
            'jabatan',
            'user'
        ]))->make(true);
    }

    public function kAktif(Request $request)
    {
        $karyawan = new Karyawan;

        if($request->has(['jabatan_id']))
        {
            $karyawan = $karyawan->whereRaw('category_id = 2 and jabatan_id = ' . $request->jabatan_id );
        }
        if ($request->has(['sistem_kerja'])) {
            $karyawan = $karyawan->where('kategori', '=', $request->sistem_kerja);
        }
        $karyawan = $karyawan->get();
        // return Datatables::of($karyawan)->make(true);
        return response()->json($karyawan);

    }
}
