@extends('adminlte::page')
@section('content')
@include('includes.error')
    <div class="panel panel-danger panel-default">
        <div class="panel-heading">
            <h3 class="text-center"><b>Tambah History Kecelakaan Kerja</b></h3>
        </div>
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('kecelakaan.store') }}">
                {{ csrf_field() }}
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-header with-border">
                                <h3 class="box-title"><b>Tambah History Kecelakaan </b></h3>
                            </div>
                            <div class="form-group">
                                <label for="karyawan_id">Nama Karyawan :</label>
                                <select name="karyawan_id" id="karyawan" class="form-control bes" value="{{ old('karyawan_id') }}">
                                    <option>Pilih Karyawan</option>
                                    @foreach ($karyawans as $kry)
                                    <option value="{{ $kry->id }}">{{ $kry->order_number }} {{ $kry->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal :</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tgl_kec" required class="form-control pull-right" id="datepicker" data-toggle="datepicker" value="{{ old('tgl_kec') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label> Sebab Kecelakaan:</label>
                                <textarea type="text" cols="65" rows="2" name="karena" class="form-control" placeholder="Sebab Kecelakaan" value="{{ old('karena') }}"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Keterangan :</label>
                                <textarea type="text" cols="65" rows="3" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ old('keterangan') }}"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary nextBtn pull-right">SIMPAN</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
