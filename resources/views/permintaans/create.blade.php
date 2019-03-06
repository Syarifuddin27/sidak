@extends('adminlte::page')
@section('content')
    <div class="panel panel-danger panel-default">
        <div class="panel-heading">
            <h3 class="text-center"><b>FORM PERMINTAAN KARYAWAN</b></h3>
        </div>
        <div class="panel-body">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                        <p><small>Bukti Tertulis</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                        <p><small>Data Perusahaan</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                        <p><small>Kriteria Pegawai</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
                        <p><small>Kriteria Pegawai</small></p>
                    </div>
                </div>
            </div>

            <form role="form" method="POST" action="{{ route('permintaan.store') }}">
                {{ csrf_field() }}
                <div class="panel panel-danger setup-content" id="step-1">
                    <div class="panel-heading">
                        <h1 class="panel-title"><b>BUKTI TERTULIS</b></h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-header with-border">

                                </div>
                                <div class="form-group">
                                    <label for="bukti_tertullis">NOTE :</label>
                                    <textarea name="bukti_tertulis" cols="85" rows="4" placeholder="*Jika Perlu"></textarea>
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-danger setup-content" id="step-2">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>DATA PERUSAHAAN</b></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="box-header with-border">
                            </div>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pendidikan">UNIT :</label>
                                        <input type="text" name="unit" class="form-control bes" placeholder="Nama Perusahaan" value="{{ old('unit') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_order">TANGGAL ORDER :</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="tgl_order" class="form-control pull-right" id="datepicker" data-toggle="datepicker" value="{{ old('tgl_order') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_spk">NO REFERENSI :</label>
                                        <input type="text" name="no_spk" class="form-control bes" placeholder="NO SPK / MOU" value="{{ old('no_spk') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bertemu">BERTAMU DENGAN :</label>
                                        <input type="text" name="bertemu" class="form-control bes" placeholder="Bertemu dengan" value="{{ old('bertemu') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">BAGIAN PEKERJAAN :</label>
                                        <select name="jabatan_id" id="category" class="form-control" value="{{ old('jabatan_id') }}">
                                            <option class="disabled">.: PILIH :.</option>
                                            @foreach ($jabatans as $jbt)
                                            <option value="{{ $jbt->id }}">{{ $jbt->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gaji"> GAJI YG DIBERIKAN :</label>
                                        <input type="text" name="gaji" class="form-control bes" placeholder="Gaji yang dibrikan" value="{{ old('gaji') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="sistem_kerja">SISTEM KERJA :</label>
                                        <select class="form-control" name="sistem_kerja" value="{{ old('tgl_melamar') }}">
                                            <option class="disabled">.: PILIH :.</option>
                                            <option value="PEGAWAI KONTRAK">PEGAWAI KONTRAK</option>
                                            <option value="PEGAWAI BORONGAN">PEGAWAI BORONGAN</option>
                                            <option value="PEGAWAI HARIAN">PEGAWAI HARIAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_kontrak">TANGGAL KONTRAK :</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="tgl_kontrak" class="form-control pull-right" id="datepicker" data-toggle="datepicker" value="{{ old('tgl_kontrak') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_habis_kontrak">TANGGAL HABIS KONTRAK :</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="tgl_habiskontrak" class="form-control pull-right" id="datepicker" data-toggle="datepicker" value="{{ old('tgl_habiskontrak') }}">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-danger setup-content" id="step-3">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>KRITERIA PEGAWAI</b></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="box-header with-border">
                            </div>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">JENIS KELAMIN :</label>
                                        <select class="form-control" name="jenis_kelamin">
                                                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                                                    <option value="PEREMPUAN">PEREMPUAN</option>
                                                </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="jumlah">JUMLAH :</label>
                                        <input type="text" name="jumlah" class="form-control bes" placeholder="Jumlah yang dibutuhkan" value="{{ old('jumlah') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lulusan">LULUSAN :</label>
                                        <select name="lulusan" id="select" class="form-control">
                                                    <option value="S1">S1</option>
                                                    <option value="SMA/SMK">SMA / SMK</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SD">SD</option>
                                                </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="usia">USIA :</label>
                                        <input type="text" name="usia" class="form-control bes" placeholder="Usia" value="{{ old('usia') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pengalaman">PENGALAMAN :</label>
                                        <textarea name="pengalaman" cols="83" rows="3" placeholder="pengalaman" value="{{ old('pengalaman') }}" class="form-control"></textarea>
                                    </div>
                                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-danger setup-content" id="step-4">
                    <div class="panel-heading">
                        <h1 class="panel-title"><b>Karyawan</b></h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-bordered bes">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Umur</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($karyawans as $karyawan)
                                        @if($karyawan->cek != 0)
                                        @if($karyawan->category_id == 1)
                                        <tr>
                                            <td><input type="checkbox" name="karyawan[]" value="{{ $karyawan->id }}"></td>
                                            <td>{{ $karyawan->nama }}</td>
                                            <td>{{ $karyawan->jabatan->name }}</td>
                                            <td>{{ $karyawan->umur }}</td>
                                        </tr>
                                        @endif
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <button class="btn btn-primary pull-right" type="submit">SAVE</button>
                            </div>
                            {{-- {{ $karyawans->links() }} --}}
                        </div>
                    </div>
                </div>
            </form>
            <a href="{{ route('permintaan.index') }}" class="btn btn-success nextBtn pull-right">Censel</a>
        </div>
    </div>
@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('css/styleform.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/styleform.js') }}"></script>
@stop
