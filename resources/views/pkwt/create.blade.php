@extends('adminlte::page')
@section('content')
@include('includes.error')
    <div class="panel panel-danger panel-default">
        <div class="panel-heading">
            <h3 class="text-center"><b>Tambah PKWT</b></h3>
        </div>
        <div class="panel-body">
            <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('pkwt.store') }}">
                {{ csrf_field() }}
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-header with-border">
                                <h3 class="box-title"><b>Tambah PKWT</b></h3>
                            </div>
                            <div class="form-group">
                                <label for="karyawan_id">NAMA KARYAWAN :</label>
                                <select name="karyawan_id" id="karyawan" class="form-control bes" value="{{ old('karyawan_id') }}">
                                    <option class="bes">Pilih Karyawan</option>
                                @foreach ($karyawans as $kry)
                                    <option value="{{ $kry->id }}">{{ $kry->order_number }} {{ $kry->nama }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>TYPE :</label>
                                <select class="form-control" name="type" value="{{ old('type') }}">
                                    <option value="KONTRAK KE 1">KONTRAK KE 1</option>
                                    <option value="KONTRAK KE 2">KONTRAK KE 2</option>
                                    <option value="KONTRAK KE 3">KONTRAK KE 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>TANGGAL AWAL:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tgl_awal" class="form-control pull-right" id="datepicker" data-toggle="datepicker" value="{{ old('tgl_awal') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>TANGGAL SAMPAI:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tgl_sampai" class="form-control pull-right" id="datepicker" data-toggle="datepicker" value="{{ old('tgl_sampai') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>NOTE :</label>
                                <textarea type="text" cols="65" rows="3" name="note" class="form-control" placeholder="Keterangan Sebab" value="{{ old('note') }}"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary nextBtn pull-right">SAVE</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
