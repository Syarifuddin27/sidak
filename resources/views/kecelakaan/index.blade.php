@extends('adminlte::page')
@section('content')
<div class="panel panel-default panel-danger">
    <div class="panel-heading">
        <h4> MANAGE HISTORY KECELAKAAN KERJA</h4>
    </div>
    <section class="invoice">
            <div class="panel-body bes">
                    <a href="{{ route('kecelakaan.create') }}" class="btn btn-danger btn-sm">Tambah History Kecelakaan Kerja</a>
                    <table id="absen-table" class="table table-hover table table-responsive" >
                        <thead class="thead-dark">
                            <tr>
                                <th width="30">No</th>
                                <th>Nama Karyawan</th>
                                <th>Tanggal</th>
                                <th>Sebab Kecelakan</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($kecelakaan->count() > 0)
                            @foreach ($kecelakaan as $kcl)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $kcl->karyawan->nama }}</td>
                                <td>{{ $kcl->tgl_kec->toFormattedDateString() }}</td>
                                <td>{{ $kcl->karena }}</td>
                                <td>{{ $kcl->keterangan }}</td>
                                <td>
                                    <a href="{{ route('kecelakaan.edit', $kcl->id) }}">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                                    <a href="{{ route('kecelakaan.show', $kcl->id) }}">
                                            <span class="fa fa-eye"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach 
                            @else
                            <tr>
                                <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                            </tr>
                            @endif
            
                        </tbody>
                    </table>
                    {{ $kecelakaan->links() }}
                </div>

    </section>
</div>
@stop

