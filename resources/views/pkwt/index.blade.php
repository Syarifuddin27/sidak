@extends('adminlte::page')
@section('content')
<div class="panel panel-default panel-danger">
    <div class="panel-heading">
        <h4> MANAGE HISTORY PKWT</h4>
    </div>
    <section class="invoice">
            <div class="panel-body bes">

                <div class="col-md-12 text-center">
                    <form method="get" action="{{ route('pkwt.index') }}" class="form-inline">
                        <div class="form-group">
                            <input type="text" name="s" class="form-control" placeholder="Cari Karyawan" value="{{ isset($s) ? $s : '' }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"> Search</i></button>
                        </div>
                    </form>
                </div>
                <a href="{{ route('pkwt.create') }}" class="btn btn-danger btn-sm">Tambah History PKWT</a>
                <table id="pkwt-table" class="table table-hover table table-responsive" >
                    <thead class="thead-dark">
                        <tr>
                            <th width="30">NO</th>
                            <th>Karyawan</th>
                            <th>Type</th>
                            <th>Tanggal Awal </th>
                            <th>Tanggal Sampai</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($pkwts->count() > 0)
                        @foreach ($pkwts as $pwt)
                        {{-- @if($pwt->type != 0) --}}
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pwt->karyawan->nama }}</td>
                            <td>{{ $pwt->type }}</td>
                            <td>{{ $pwt->tgl_awal->toFormattedDateString() }}</td>
                            <td>{{ $pwt->tgl_sampai->toFormattedDateString() }}</td>
                            <td>{{ $pwt->note }}</td>
                            <td>
                                <a href="{{ route('pkwt.edit', $pwt->id) }}">
                                    <span class="fa fa-pencil"></span>
                                </a>
                                <a href="{{ route('pkwt.show', $pwt->id) }}">
                                        <span class="fa fa-eye"></span>
                                </a>
                            </td>
                        </tr>
                        {{-- @endif --}}
                        @endforeach 
                        @else
                        <tr>
                            <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                        </tr>
                        @endif

                    </tbody>
                </table>
                {{ $pkwts->links() }}
            </div>

    </section>
</div>

@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop

