@extends('adminlte::page')
@section('content')
<?php 
$no = 1;
?>
    <div class="panel panel-danger panel-default bes">
        <div class="panel-heading">
            <h3 class="text-center"><b>Nama Karyawan </b>{{ $karyawan->nama }}</h3>
        </div>
        <div class="panel-body">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                        <p><small>Personal</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                        <p><small>Pendidikan & Pengalaman</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                        <p><small>History Absensi</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
                        <p><small>Dokumen</small></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-book"></i> {{ $karyawan->order_number }}
                        <?php
                                    $hari = date("d-m-Y");
                                    $proses	= mktime(0,0,0,date("n"),date("j")+0,date("Y"));
                                    $hari_ini = date("d-m-Y", $proses);
                                    ?>
                            <small class="pull-right">Periode :&nbsp;{{ $karyawan->updated_at->toFormattedDateString() }}</small>
                    </h2>
                </div>
            </div>
            <div class="panel panel-danger setup-content" id="step-1">
                <section class="invoice">
                    <div class="row invoice-info">
                        <div class="col-sm-3 invoice-col">
                            <div class="box box-primary text-center">
                                <img class="img-circle" width="200px" height="auto" src="{{ $karyawan->image }}">
                            </div>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <legend><b>Pribadi</b></legend>
                            <table class="table table-hover">
                                <tr>
                                    <td align="right" width="40%"><b>Kode Dokumen</td>
                                    <td width="1%">&nbsp;</td>
                                    <td>{{ $karyawan->order_number }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Tanggal Dokumen</b></td>
                                    <td>&nbsp;</td>
                                    <td>
                                        {{ $karyawan->tgl_melamar->toFormattedDateString() }}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Kategori</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->kategori }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Nama Lengkap</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->nama }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Jenis Kelamin</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Agama</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->agama }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Status</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->status }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Tinggi Badan</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->tinggi_badan }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Berat Badan</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->berat_badan }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <legend><b>Kontak</b></legend>
                            <table class="table table-hover">
                                <tr>
                                    <td align="right" width="40%"><b>No Identitas KTP</b></td>
                                    <td width="1%">&nbsp</td>
                                    <td>{{ $karyawan->noktp }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>No HP</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->nohp }}</td>
                                </tr>
                                <tr>

                                    <td align="right"><b>TTL</b></td>
                                    <td>&nbsp;</td>
                                        <td>{{ $karyawan->tempat_lahir }},

                                        {{ $karyawan->tgl_lahir->toFormattedDateString() }}
                                    </td>
                                </tr>

                                <tr>
                                    <td align="right"><b>Di buat </b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->created_at->toFormattedDateString() }}</td>
                                </tr>

                                <tr>
                                    <td align="right"><b>Kewarganegaraan</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->warganegara }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Provinsi</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->provinsi }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Kota / Kabupaten</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->kabupaten }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Kecamatan</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->kecamatan }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Alamat Lengkap</b></td>
                                    <td>&nbsp</td>
                                    <td>{{ $karyawan->alamat_lengkap }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Alamat Kos</b></td>
                                    <td>&nbsp</td>
                                    <td>{{ $karyawan->alamat_kos }}</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </section>
            </div>

            <div class="panel panel-danger setup-content" id="step-2">
                <section class="invoice">
                    <div class="row">

                        <div class="col-xs-12">
                            <h4 class="page-header">
                                <i class="fa fa-book"></i> <b>Pendidikan & Pengalaman</b>
                            </h4>
                        </div>

                    </div>
                    <div class="panel-heading">
                        <h3 class="panel-title"><b> Pendidikan Formal</b></h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Pendidikan</th>
                                        <th>Nama Sekolah</th>
                                        <th>Kota</th>
                                        <th>Jurusan</th>
                                        <th>Mulai</th>
                                        <th>Lulus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($karyawan->pendidikan->count() > 0)
                                    <tr>
                                        <td>{{ $karyawan->pendidikan->pendidikan }}</td>
                                        <td>{{ $karyawan->pendidikan->nama_sekolah }}</td>
                                        <td>{{ $karyawan->pendidikan->kota_formal }}</td>
                                        <td>{{ $karyawan->pendidikan->jurusan }}</td>
                                        <td>{{ $karyawan->pendidikan->mulai }}</td>
                                        <td>{{ $karyawan->pendidikan->lulus }}</td>
                                    </tr>
                                    @else
                                    <tr>
                                        <th colSpan="6" class="text-center">Tidak Punya Pendidikan</th>
                                    </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>

                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Pendidikan Non Formal</b></h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Jenis Pendidikan</th>
                                        <th>Lembaga</th>
                                        <th>Kota</th>
                                        <th>Tahun</th>
                                        <th>Durasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($karyawan->nonpendidikan->count() > 0)
                                    <tr>
                                        <td>{{ $karyawan->nonpendidikan->jenis_pendidikan }}</td>
                                        <td>{{ $karyawan->nonpendidikan->lembaga }}</td>
                                        <td>{{ $karyawan->nonpendidikan->kota }}</td>
                                        <td>{{ $karyawan->nonpendidikan->tahun }}</td>
                                        <td>{{ $karyawan->nonpendidikan->durasi }}</td>
                                    </tr>
                                    @else
                                    <tr>
                                        <th colSpan="6" class="text-center">Tidak Punya Pendidikan NonFormal</th>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>

                    <div class="panel-heading">
                            <h3 class="panel-title"><b>Pengalaman Kerja</b></h3>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Bidang Usaha</th>
                                            <th>Jabatan</th>
                                            <th>Gaji</th>
                                            <th>Mulai Kerja</th>
                                            <th>Sampai</th>
                                            <th>Alasan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($karyawan->pengalaman->count() > 0)
                                        <tr>
                                            <td>{{ $karyawan->pengalaman->nama_perusahaan }}</td>
                                            <td>{{ $karyawan->pengalaman->alamat_perusahaan }}</td>
                                            <td>{{ $karyawan->pengalaman->bidang_usaha }}</td>
                                            <td>{{ $karyawan->pengalaman->jabatan }}</td>
                                            <td>{{ $karyawan->pengalaman->gaji }}</td>
                                            <td>{{ $karyawan->pengalaman->mulai_kerja }}</td>
                                            <td>{{ $karyawan->pengalaman->akhir_kerja }}</td>
                                            <td>{{ $karyawan->pengalaman->alasan }}</td>
                                        </tr>
                                        @else
                                        <tr>
                                            <th colSpan="9" class="text-center">Tidak Punya Pengalaman</th>
                                        </tr>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>

                </section>
            </div>

            <div class="panel panel-danger setup-content" id="step-3">
                <section class="invoice">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4 class="page-header">
                                <i class="fa fa-book"></i> Code Absen 
                                <div>&nbsp;</div>
                                <b>{{ $karyawan->kode_absen }}</b>
                            </h4>
                        </div>
                    </div>
                </section>
            </div>

            <div class="panel panel-danger setup-content" id="step-4">
                <section class="invoice">
                    <div class="row">

                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-book"></i> Kelengkapan Dokuments
                            </h2>
                        </div>

                    </div>

                    <div class="row invoice-info">

                        <div class="col-sm-6 invoice-col">
                            
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Dokumen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($karyawan->docs as $doc)
                                    <tr>
                                        <td>{{ $doc->doc }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>

                </section>
            </div>
            
        </div>
        
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styleform.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/styleform.js') }}"></script>
@stop
