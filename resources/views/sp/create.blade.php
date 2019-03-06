@extends('adminlte::page')
@section('content')
@include('includes.error')
    <div class="panel panel-danger panel-default">
        <div class="panel-heading">
            <h3 class="text-center"><b>Tambah History SP</b></h3>
        </div>
        <div class="panel-body">
            <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('sp.store') }}">
                {{ csrf_field() }}
                <div class="panel-body bes">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-header with-border">
                                <h3 class="box-title"><b>Tambah History Kerja</b></h3>
                            </div>
                            <div class="form-group">
                                <label for="karyawan_id">NAMA KARYAWAN :</label>
                                <select name="karyawan_id" id="karyawan" class="form-control bes" value="{{ old('karyawan_id') }}">
                                    <option class="bes">Pilih Karyawan</option>
                                    @foreach ($karyawans as $kry)
                                        <option value="{{ $kry->id }}">{{ $kry->order_number }}  {{ $kry->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>STATUS :</label>
                                <select class="form-control" name="status" value="{{ old('status') }}">
                                    <option value="SP 1">SP 1</option>
                                    <option value="SP 2">SP 2</option>
                                    <option value="SP 3">SP 3</option>
                                    <option value="TEGURAN LISAN">TEGURAN LISAN</option>
                                    <option value="KECELAKAAN KERJA">KECELAKAAN KERJA</option>
                                    <option value="BLACKLIST">BLACKLIST</option>
                                    <option value="LAIN-LAIN">LAIN-LAIN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>TANGGAL :</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tanggal" required class="form-control pull-right" id="datepicker" data-toggle="datepicker" value="{{ old('tanggal') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>KETERANGAN :</label>
                                <textarea type="text" cols="65" rows="3" name="keterangan" required class="form-control" placeholder="Keterangan Sebab" value="{{ old('keterangan') }}"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary nextBtn pull-right">SAVE</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
