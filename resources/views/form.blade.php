@extends('includes.daf')
@section('content')

    <div class="container">
        <div class="row">
            <div class="panel panel-danger panel-default">
                @include('includes.error')
                <div class="panel-heading">
                    <div class="text-center"><img src="../../uploads/bg/logo-mja.png" alt="image"></div>
                    <h3 class="text-center"><b>PENDAFTARAN KARYAWAN BARU</b></h3>
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

                    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('daftar.store') }}">
                        {{ csrf_field() }}
                        <div class="panel panel-danger setup-content" id="step-1">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Personal</b></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><b>DATA PRIBADI</b></h3>
                                        </div>
                                        <div class="form-group">
                                            <label for="foto"><span class="red">*</span>FOTO :</label>
                                            <input type="file" name="image" class="form-control" required placeholder="Bagian yang dilamar" value="{{ old('foto') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_melamar"><span class="red">*</span>TANGGAL MELAMAR :</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="tgl_melamar" required class="form-control pull-right" id="date" data-toggle="datepicker" value="{{ old('tgl_melamar') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="kategori"><span class="red">*</span>KATEGORI :</label>
                                            <select class="form-control" name="kategori" value="{{ old('kategori') }}">
                                                <option value="PEGAWAI KONTRAK">PEGAWAI KONTRAK</option>
                                                <option value="PEGAWAI BORONGAN">PEGAWAI BORONGAN</option>
                                                <option value="PEGAWAI HARIAN">PEGAWAI HARIAN</option></select>
                                        </div>

                                        <div class="form-group">
                                            <label for="jabatan_id"><span class="red">*</span>DEVISI :</label>
                                            <select name="jabatan_id" id="category" class="form-control" value="{{ old('jabatan_id') }}">@foreach ($jabatans as $jbt)<option value="{{ $jbt->id }}">{{ $jbt->name }}</option>@endforeach</select>
                                        </div>

                                        <div class="form-group">
                                            <label for="nama"><span class="red">*</span>NAMA :</label>
                                            <input type="text" name="nama" class="form-control" required style="text-transform: uppercase;" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin"><span class="red">*</span>JENIS KELAMIN :</label>
                                            <select class="form-control" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"><option value="LAKI-LAKI">LAKI-LAKI</option><option value="PEREMPUAN">PEREMPUAN</option></select>
                                        </div>

                                        <div class="form-group">
                                            <label for="agama"><span class="red">*</span>AGAMA :</label>
                                            <select class="form-control" name="agama" value="{{ old('agama') }}"><option value="ISLAM">ISLAM</option><option value="KRISTEN">KRISTEN</option><option value="KATHOLIK">KATHOLIK</option><option value="HINDU">HINDU</option><option value="BUDHA">BUDHA</option><option value="KONGHUCHU">KONGHUCHU</option></select>
                                        </div>
                                        <div class="form-group">
                                            <label for="umur"><span class="red">*</span>UMUR :</label>
                                            <input type="number" name="umur" class="form-control" required style="text-transform: uppercase;" placeholder="22" value="{{ old('umur') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><b>KONTAK</b></h3>
                                        </div>

                                        <div class="form-group">
                                            <label for="nokk"><span class="red">*</span>NO KK :</label>
                                            <input type="text" name="nokk" class="form-control" required placeholder="3322XXX" value="{{ old('nokk') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nokk"><span class="red">*</span>NO KTP :</label>
                                            <input type="text" name="noktp" class="form-control" required placeholder="35767XXXX" value="{{ old('noktp') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nohp"><span class="red">*</span>NO HP :</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" name="nohp" class="form-control" required placeholder="08132XXX" value="{{ old('nohp') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_anak">JUMLAH ANAK :</label>
                                            <input type="text" name="jumlah_anak" class="form-control" placeholder="Bila sudah berkeluarga, gunakan angka" value="{{ old('jumlah_anak') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="status"><span class="red">*</span>STATUS :</label>
                                            <select class="form-control" name="status" value="{{ old('status') }}"><option value="BELUM MENIKAH">BELUM MENIKAH</option><option value="MENIKAH">MENIKAH</option><option value="PERNAH MENIKAH">PERNAH MENIKAH</option></select>
                                        </div>
                                        <div class="form-group">
                                            <label for="berat_badan"><span class="red">*</span>BERAT BADAN :</label>
                                            <input type="text" name="berat_badan" class="form-control" placeholder="xx kg" value="{{ old('berat_badan') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tinggi_badan"><span class="red">*</span>TINGGI BADAN :</label>
                                            <input type="text" name="tinggi_badan" class="form-control" placeholder="xx cm" value="{{ old('tinggi_badan') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_ibu"><span class="red">*</span>NAMA IBU KANDUNG :</label>
                                            <input type="text" name="nama_ibu" class="form-control" required style="text-transform: uppercase;" placeholder="Namn Ibu Kandung" value="{{ old('nama_ibu') }}">
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
                                                <label for="tempat_lahir"><span class="red">*</span>TEMPAT LAHIR :</label>
                                                <input type="text" name="tempat_lahir" class="form-control" required style="text-transform: uppercase;" placeholder="Kota Kelahiran" value="{{ old('tempat_lahir') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_lahir"><span class="red">*</span>TANGGAL LAHIR :</label>
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" name="tgl_lahir" required class="form-control pull-right" id="date" data-toggle="datepicker" value="{{ old('tgl_lahir') }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="warganegara"><span class="red">*</span>KEWARGANEGARAAN :</label>
                                                <input type="text" name="warganegara" class="form-control" required style="text-transform: uppercase;" placeholder="INDONESIA" value="{{ old('warganegara') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama"><span class="red">*</span>PROVINSI :</label>
                                                <input type="text" name="provinsi" class="form-control" required style="text-transform: uppercase;" placeholder="Nama Provinsi" value="{{ old('provinsi') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="kabupaten"><span class="red">*</span>KABUPATEN :</label>
                                                <input type="text" name="kabupaten" class="form-control" required style="text-transform: uppercase;" placeholder="Nama Kabupaten" value="{{ old('kabupaten') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="kecamatan"><span class="red">*</span>KECAMATAN :</label>
                                                <input type="text" name="kecamatan" class="form-control" required style="text-transform: uppercase;" placeholder="Nama Kecamatan" value="{{ old('kecamatan') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="desa"><span class="red">*</span>DESA / KELURAHAN :</label>
                                                <input type="text" name="desa" class="form-control" required style="text-transform: uppercase;" placeholder="Nama Desa / Kelurahan" value="{{ old('desa') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_lengkap"><span class="red">*</span>ALAMAT LENGKAP :</label>
                                                <textarea type="text" cols="73" rows="5" name="alamat_lengkap" required style="text-transform: capitalize;" class="form-control" placeholder="Tempat tinggal sekarang"
                                                    value="{{ old('alamat_lengkap') }}"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_kos">ALAMAT KOS :</label>
                                                <textarea type="text" cols="73" rows="5" name="alamat_kos" style="text-transform: capitalize;" class="form-control" placeholder="Bila tinggal di Kos " value="{{ old('alamat_kos') }}"></textarea>
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
                                                <input type="text" name="nama_wali" style="text-transform: uppercase;" class="form-control" placeholder="Nama Wali" value="{{ old('nama_wali') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_wali">NO HP :</label>
                                                <input type="text" name="nohp_wali" class="form-control" placeholder="Nomor HP Wali" value="{{ old('nohp_wali') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_wali">ALAMAT :</label>
                                                <input type="text" name="alamat_wali" style="text-transform: capitalize;" class="form-control" placeholder="Alamat Wali" value="{{ old('alamat_wali') }}">
                                            </div>
                                        </div>
                                        <div class="panel panel-body panel-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"><span class="red">*</span><b>KAPAN ANDA PAPAT MULAI BEKERJA</b></h3>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="dapat_bekerja" class="form-control" required style="text-transform: uppercase;" placeholder="sekarang / secepatnya" value="{{ old('dapat_bekerja') }}">
                                            </div>
                                        </div>
                                        <div class="panel-danger"><span class="red"># </span><i>Yang bertenada <span class="red">*</span> Wajib di Isi</i></div>
                                        <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-danger setup-content" id="step-2">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b>Pendidikan</b></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-body panel-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"><b>PENDIDIKAN FORMAL :</b></h3>
                                            </div>
                                            <div class="form-group">
                                                <label for="pendidikan"><span class="red">*</span>PENDIDIKAN :</label>
                                                <select class="form-control" name="pendidikan" value="{{ old('pendidikan') }}"><option value="S1">S1</option><option value="SMA/SMK">SMA / SMK</option><option value="SMP">SMP </option><option value="SD">SD </option></select>
                                            </div>
                                            <div class="form-group">
                                                <label for="kota"><span class="red">*</span>NAMA SEKOLAH :</label>
                                                <input type="text" name="nama_sekolah" class="form-control" required style="text-transform: uppercase;" placeholder="Nama Asal Sekolah" value="{{ old('nama_sekolah') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="kota"><span class="red">*</span>KOTA :</label>
                                                <input type="text" name="kota_formal" class="form-control" required style="text-transform: uppercase;" placeholder="Nama Kota" value="{{ old('kota_formal') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="jurusan"><span class="red">*</span>JURUSAN :</label>
                                                <input type="text" name="jurusan" class="form-control" style="text-transform: uppercase;" placeholder="Jurusan yang diambil" value="{{ old('jurusan') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="dari"><span class="red">*</span>MULAI :</label>
                                                <input type="text" name="mulai" class="form-control" required placeholder="Tahun awal belajar" data-toggle="datepicker-year"
                                                    value="{{ old('mulai') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="sampai"><span class="red">*</span>LULUS :</label>
                                                <input type="text" name="lulus" class="form-control" required placeholder="Tahun Kelulusan" data-toggle="datepicker-year"
                                                    value="{{ old('lulus') }}">
                                            </div>
                                            <div class="panel-danger"><span class="red"># </span><i>Yang bertenada <span class="red">*</span> Wajib di Isi</i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-body panel-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"><b>PENDIDIKAN NON FORMAL :</b></h3>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis_pendidikan">JENIS PENDIDIKAN :</label>
                                                <input type="text" name="jenis_pendidikan" class="form-control" placeholder="Kursus / yang lain" value="{{ old('jenis_pendidikan') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="lembaga">LEMBAGA :</label>
                                                <input type="text" name="lembaga" class="form-control" style="text-transform: uppercase;" placeholder="Nama Lembaga" value="{{ old('lembaga') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="kota"> KOTA :</label>
                                                <input type="text" name="kota" class="form-control" style="text-transform: uppercase;" placeholder="Nama Kota" value="{{ old('kota') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="tahun">TAHUN :</label>
                                                <input type="text" name="tahun" class="form-control" placeholder="Tahun awal mengikuti" data-toggle="datepicker-year" value="{{ old('tahun') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="durasi">DURSI :</label>
                                                <input type="text" name="durasi" class="form-control" placeholder="Durasi lama" value="{{ old('durasi') }}">
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
                                                <input type="text" name="nama_perusahaan" class="form-control" style="text-transform: uppercase;" placeholder="Nama Perusahaan / Unit" value="{{ old('nama_perusahaan') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_perusahaan">ALAMAT PERUSAHAAN :</label>
                                                <input type="text" name="alamat_perusahaan" class="form-control" style="text-transform: capitalize;" placeholder="Alamat lengkap" value="{{ old('alamat_perusahaan') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="bidang_usaha">BIDANG USAHA :</label>
                                                <input type="text" name="bidang_usaha" class="form-control" style="text-transform: capitalize;" placeholder="Bidang usaha perusahaan" value="{{ old('bidang_usaha') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="jabatan">JABATAN :</label>
                                                <input type="text" name="jabatan" class="form-control" style="text-transform: uppercase;" placeholder="Jabatan anda" value="{{ old('jabatan') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gaji">GAJI :</label>
                                                <input type="text" name="gaji" class="form-control" style="text-transform: uppercase;" placeholder="UMR / UMK / Atau yang lain" value="{{ old('gaji') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="dari">MULAI KERJA :</label>
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" name="mulai_kerja" class="form-control pull-right" data-toggle="datepicker" value="{{ old('mulai_kerja') }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="smpai">SAMPAI :</label>
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" name="akhir_kerja" class="form-control pull-right" data-toggle="datepicker" value="{{ old('akhir_kerja') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="alasan_keluar">ALASAN ANDA KELUAR :</label>
                                                <input type="text" name="alasan" class="form-control" style="text-transform: uppercase;" placeholder="Alasan anda berhenti bekerja" value="{{ old('alasan') }}">
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
                                    <label for="docs">Kelengkapan Dokumen</label> @foreach ($docs as $doc)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="docs[]" value="{{ $doc->id }}">{{ $doc->doc }}
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
        </div>
    </div>
@endsection

@section('css')
    <style>
        .red {
            color: red;
        }
    </style>
@endsection
