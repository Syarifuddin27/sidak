@extends('adminlte::page')
@section('content')

    @include('includes.error')
    <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-center">EDIT DATA KARYAWAN</h1>
            </div>
            <div class="panel-body">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                            <p><small>Personal</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p><small>Pendidikan</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p><small>Pengalaman Kerja</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                            <p><small>Dokumen</small></p>
                        </div>
                    </div>
                </div>

                <form role="form" method="POST" enctype="multipart/form-data" action="{{ action('KaryawanController@update', $karyawan->id) }}">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="panel panel-danger setup-content" id="step-1">
                        <div class="panel-heading">
                            <h3 class="panel-title">Personal</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><b>DATA PRIBADI</b></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">FOTO :</label>
                                        <img src="{{ $karyawan->image }}" alt="image" style="width:60px; height:auto;">
                                        <input type="file" name="image" class="form-control" placeholder="Bagian yang dilamar">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_melamar">TANGGAL MELAMAR :</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="tgl_melamar" required class="form-control pull-right" id="date" data-toggle="datepicker" value="{{ $karyawan->tgl_melamar }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">KATEGORI :</label>
                                        <select class="form-control" name="kategori">
                                                <option value="{{ $karyawan->kategori }}" selected>{{ $karyawan->kategori }}</option>
                                                <option value="PEGAWAI KONTRAK">PEGAWAI KONTRAK</option>
                                                <option value="PEGAWAI BORONGAN">PEGAWAI BORONGAN</option>
                                                <option value="PEGAWAI HARIAN">PEGAWAI HARIAN</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="jabatan_id">DEVISI :</label>
                                        <select name="jabatan_id" id="category" class="form-control">
                                            @foreach ($jabatans as $jabatan)
                                                <option value="{{ $jabatan->id }}"
                                                    @if ($karyawan->jabatan->id == $jabatan->id)
                                                        selected
                                                    @endif
                                                    >{{ $jabatan->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group bes">
                                        <label for="nama">NAMA :</label>
                                        <input type="text" name="nama" class="form-control bes" required placeholder="Nama Lengkap" value="{{ $karyawan->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">JENIS KELAMIN :</label>
                                        <select class="form-control" name="jenis_kelamin">
                                                <option value="{{ $karyawan->jenis_kelamin }}" disabled>{{ $karyawan->jenis_kelamin }}</option>
                                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                                <option value="PEREMPUAN">PEREMPUAN</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="agama">AGAMA :</label>
                                        <select class="form-control" name="agama">
                                                <option value="{{ $karyawan->agama }}" disabled>{{ $karyawan->agama }}</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="KRISTEN">KRISTEN</option>
                                                <option value="KATHOLIK">KATHOLIK</option>
                                                <option value="HINDU">HINDU</option>
                                                <option value="BUDHA">BUDHA</option>
                                                <option value="KONGHUCHU">KONGHUCHU</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="umur">UMUR :</label>
                                        <input type="number" name="umur" class="form-control" required placeholder="22" value="{{ $karyawan->umur }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><b>KONTAK</b></h3>
                                    </div>

                                    <div class="form-group">
                                        <label for="nokk">NO KK :</label>
                                        <input type="text" name="nokk" class="form-control" required placeholder="357678xxxx" value="{{ $karyawan->nokk }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nokk">NO KTP :</label>
                                        <input type="text" name="noktp" class="form-control" required placeholder="357678xxxx" value="{{ $karyawan->noktp }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nohp">NO HP :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" name="nohp" class="form-control" required placeholder="0881xxx" value="{{ $karyawan->nohp }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_anak">JUMLAH ANAK :</label>
                                        <input type="text" name="jumlah_anak" class="form-control" placeholder="Bila sudah berkeluarga, gunakan angka" value="{{ $karyawan->jumlah_anak }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">STATUS :</label>
                                        <select class="form-control" name="status" value="{{ old('status') }}">
                                                <option value="{{ $karyawan->status }}" selected>{{ $karyawan->status }}</option>
                                                <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                                                <option value="MENIKAH">MENIKAH</option>
                                                <option value="PERNAH MENIKAH">PERNAH MENIKAH</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="berat_badan">BERAT BADAN :</label>
                                        <input type="text" name="berat_badan" class="form-control" placeholder="xx kg" value="{{ $karyawan->berat_badan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tinggi_badan">TINGGI BADAN :</label>
                                        <input type="text" name="tinggi_badan" class="form-control" placeholder="xx cm" value="{{ $karyawan->tinggi_badan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_ibu">NAMA IBU KANDUNG :</label>
                                        <input type="text" name="nama_ibu" class="form-control bes" required placeholder="Namn Ibu Kandung" value="{{ $karyawan->nama_ibu }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-body panel-info">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><b>DATA TEMPAT TINGGAL</b></h3>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_lahir">TEMPAT LAHIR :</label>
                                            <input type="text" name="tempat_lahir" class="form-control bes" required placeholder="Kota Kelahiran" value="{{ $karyawan->tempat_lahir }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_lahir">TANGGAL LAHIR :</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="tgl_lahir" required class="form-control pull-right" id="date" data-toggle="datepicker" value="{{ $karyawan->tgl_lahir }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="warganegara">KEWARGANEGARAAN :</label>
                                            <input type="text" name="warganegara" class="form-control bes" required placeholder="INDONESIA" value="{{ $karyawan->warganegara }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">PROVINSI :</label>
                                            <input type="text" name="provinsi" class="form-control bes" required placeholder="Nama Provinsi" value="{{ $karyawan->provinsi }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="kabupaten">KABUPATEN :</label>
                                            <input type="text" name="kabupaten" class="form-control bes" required placeholder="Nama Kabupaten" value="{{ $karyawan->kabupaten }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="kecamatan">KECAMATAN :</label>
                                            <input type="text" name="kecamatan" class="form-control bes" required placeholder="Nama Kecamatan" value="{{ $karyawan->kecamatan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="desa">DESA / KELURAHAN :</label>
                                            <input type="text" name="desa" class="form-control bes" required placeholder="Nama Desa / Kelurahan" value="{{ $karyawan->desa }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_lengkap">ALAMAT LENGKAP :</label>
                                            <textarea type="text" cols="73" rows="5" name="alamat_lengkap" required class="form-control cap" placeholder="Tempat tinggal sekarang"
                                                value="{{ old('alamat_lengkap') }}">{{ $karyawan->alamat_lengkap }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_kos">ALAMAT KOS :</label>
                                            <textarea type="text" cols="73" rows="5" name="alamat_kos" class="form-control cap" placeholder="Bila tinggal di Kos " value="{{ $karyawan->alamat_kos }}"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-body panel-info">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><b>ORANG YANG DAPAT DI HUBUNGI KETIKA DIBUTUHKAN</b></h3>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_wali">NAMA :</label>
                                            <input type="text" name="nama_wali" class="form-control bes" placeholder="Nama Wali" value="{{ $karyawan->nama_wali }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_wali">NO HP :</label>
                                            <input type="text" name="nohp_wali" class="form-control" placeholder="Nomor HP Wali" value="{{ $karyawan->nohp_wali }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_wali">ALAMAT :</label>
                                            <input type="text" name="alamat_wali" class="form-control cap" placeholder="Alamat Wali" value="{{ $karyawan->alamat_wali }}">
                                        </div>
                                    </div>
                                    <div class="panel panel-body panel-info">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><b>KAPAN ANDA PAPAT MULAI BEKERJA</b></h3>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="dapat_bekerja" class="form-control bes" required placeholder="sekarang / secepatnya" value="{{ $karyawan->dapat_bekerja }}">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-danger setup-content" id="step-2">
                        <div class="panel-heading">
                            <h3 class="panel-title">Pendidikan</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-body panel-info">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><b>PENDIDIKAN FORMAL :</b></h3>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan">PENDIDIKAN :</label>
                                            <select class="form-control" name="pendidikan" value="{{ old('pendidikan') }}">
                                                    <option value="{{ $karyawan->pendidikan->pendidikan }}">{{ $karyawan->pendidikan->pendidikan }}</option>
                                                    <option value="S1">S1</option>
                                                    <option value="SMA/SMK">SMA / SMK</option>
                                                    <option value="SMP">SMP </option>
                                                    <option value="SD">SD </option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kota">NAMA SEKOLAH :</label>
                                            <input type="text" name="nama_sekolah" class="form-control bes" required placeholder="Nama Asal Sekolah" value="{{ $karyawan->pendidikan->nama_sekolah }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="kota">KOTA :</label>
                                            <input type="text" name="kota_formal" class="form-control bes" required placeholder="Nama Kota" value="{{ $karyawan->pendidikan->kota_formal }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan">JURUSAN :</label>
                                            <input type="text" name="jurusan" class="form-control bes" placeholder="Jurusan yang diambil" value="{{ $karyawan->pendidikan->jurusan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="dari">MULAI :</label>
                                            <input type="text" name="mulai" class="form-control" required placeholder="Tahun awal belajar" data-toggle="datepicker-year" value="{{ $karyawan->pendidikan->mulai }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="sampai">LULUS :</label>
                                            <input type="text" name="lulus" class="form-control" required placeholder="Tahun Kelulusan" data-toggle="datepicker-year" value="{{ $karyawan->pendidikan->lulus }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-body panel-info">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><b>PENDIDIKAN NON FORMAL :</b></h3>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_pendidikan">JENIS PENDIDIKAN :</label>
                                            <input type="text" name="jenis_pendidikan" class="form-control bes" placeholder="Kursus / yang lain" value="{{ $karyawan->nonpendidikan->jenis_pendidikan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="lembaga">LEMBAGA :</label>
                                            <input type="text" name="lembaga" class="form-control bes" placeholder="Nama Lembaga" value="{{ $karyawan->nonpendidikan->lembaga }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="kota"> KOTA :</label>
                                            <input type="text" name="kota" class="form-control bes" placeholder="Nama Kota" value="{{ $karyawan->nonpendidikan->kota }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun">TAHUN :</label>
                                            <input type="text" name="tahun" class="form-control" placeholder="Tahun awal mengikuti" data-toggle="datepicker-year" value="{{ $karyawan->nonpendidikan->tahun }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="durasi">DURSI :</label>
                                            <input type="text" name="durasi" class="form-control bes" placeholder="6 bulan" value="{{ $karyawan->nonpendidikan->durasi }}">
                                        </div>
                                        <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-danger setup-content" id="step-3">
                        <div class="panel-heading">
                            <h3 class="panel-title">Pengalaman</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="panel">
                                    <div class="box-header text-center">
                                        <h3 class="box-title"><b>PENGALAMAN KERJA</b></h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_perusahaan">NAMA PERUSAHAAN :</label>
                                            <input type="text" name="nama_perusahaan" class="form-control bes" placeholder="PT. MAJU MAPAN" value="{{ $karyawan->pengalaman->nama_perusahaan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_perusahaan">ALAMAT PERUSAHAAN :</label>
                                            <input type="text" name="alamat_perusahaan" class="form-control cap" placeholder="Alamat" value="{{ $karyawan->pengalaman->alamat_perusahaan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="bidang_usaha">BIDANG USAHA :</label>
                                            <input type="text" name="bidang_usaha" class="form-control bes" placeholder="Bidang usaha perusahaan" value="{{ $karyawan->pengalaman->bidang_usaha }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jabatan">JABATAN :</label>
                                            <input type="text" name="jabatan" class="form-control bes" placeholder="Jabatan anda" value="{{ $karyawan->pengalaman->jabatan }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gaji">GAJI :</label>
                                            <input type="text" name="gaji" class="form-control bes" placeholder="UMR / UMK / Atau yang lain" value="{{ $karyawan->pengalaman->gaji }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="dari">MULAI KERJA :</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="mulai_kerja" class="form-control pull-right" data-toggle="datepicker" value="{{ $karyawan->pengalaman->mulai_kerja }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="smpai">SAMPAI :</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="akhir_kerja" class="form-control pull-right" data-toggle="datepicker" value="{{ $karyawan->pengalaman->akhir_kerja }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="alasan_keluar">ALASAN ANDA KELUAR :</label>
                                            <input type="text" name="alasan" class="form-control bes" placeholder="Alasan anda berhenti bekerja" value="{{ $karyawan->pengalaman->alasan }}">
                                        </div>
                                        <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-danger setup-content" id="step-4">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dokumen</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="docs">Kelengkapan Dokumen</label>
                                @foreach ($docs as $doc)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="docs[]" value="{{ $doc->id }}"
                                            @foreach ($karyawan->docs as $d)
                                                @if ($doc->id == $d->id)
                                                    checked
                                                @endif
                                            @endforeach
                                            >{{ $doc->doc }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary nextBtn pull-right">SAVE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/styleform.css') }}">

@endsection

@section('js')
<script src="{{ asset('js/styleform.js') }}"></script>

@stop
