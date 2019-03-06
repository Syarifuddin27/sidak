<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendidikan;
use App\Nonpendidikan;
use App\Pengalaman;
use App\Jabatan;
use App\Doc;
use App\Category;
use App\Karyawan;
use App\Verifi;
use Carbon\Carbon;
use App\Kecelakaan;
use App\Absensi;
use App\Pkwt;
use App\Sp;

class InsSendiriController extends Controller
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
    public function create()
    {
        $karyawan = Karyawan::all();
        $categories = Category::all();
        $docs = Doc::all();
        $pendidikans = Pendidikan::all();
        $nonpendidikans = Nonpendidikan::all();
        $pengalamans = Pengalaman::all();
        $jabatans = Jabatan::all();

        // if ($categories->count() == 0 || $docs->count() == 0) {

        //     return redirect()->back();

        // }

        return view('form')->with('categories', $categories)
                                       ->with('docs', $docs)
                                       ->with('pendidikans', $pendidikans)
                                       ->with('nonpendidikans', $nonpendidikans)
                                       ->with('pengalamans', $pengalamans)
                                       ->with('jabatans', $jabatans)
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
            // 'category_id' => 'required',
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

        $karyawan_image = $request->image;
        $karyawan_image_new_name = time() . $karyawan_image->getClientOriginalName();
        $karyawan_image->move('uploads/karyawans', $karyawan_image_new_name);

        $karyawan->image = 'uploads/karyawans/' . $karyawan_image_new_name;
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
        $karyawan->user_id = 1;
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
                if ($nonpendidikan->save()) {
                    $pengalaman->karyawan_id = $karyawan->id;
                    $pengalaman->nama_perusahaan = $request->nama_perusahaan;
                    $pengalaman->alamat_perusahaan = $request->alamat_perusahaan;
                    $pengalaman->bidang_usaha = $request->bidang_usaha;
                    $pengalaman->jabatan = $request->jabatan;
                    $pengalaman->gaji = $request->gaji;
                    $pengalaman->mulai_kerja = $request->mulai_kerja;
                    $pengalaman->akhir_kerja = $request->akhir_kerja;
                    $pengalaman->alasan = $request->alasan;
                    if ($pengalaman->save()) {
                        $kecelakaan->karyawan_id = $karyawan->id;
                        if ($kecelakaan->save()) {
                            $absensi->karyawan_id = $karyawan->id;
                            if ($absensi->save()) {
                                $pkwt->karyawan_id = $karyawan->id;
                                if ($pkwt->save()) {
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
        return redirect('/');
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
