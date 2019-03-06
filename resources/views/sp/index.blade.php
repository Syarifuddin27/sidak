@extends('adminlte::page')
@section('content')
<div class="panel panel-default panel-danger">
    <div class="panel-heading">
        <h4> MANAGE HISTORY PKWT</h4>
    </div>
    <section class="invoice">
            <div class="panel-body bes">
                    <a href="{{ route('sp.create') }}" class="btn btn-danger btn-sm">Tambah History SP</a>
                    <table id="pkwt-table" class="table table-hover table table-responsive" >
                        <thead class="thead-dark">
                            <tr>
                                <th width="30">No</th>
                                <th>Nama Karyawan</th>
                                <th>status</th>
                                <th>tanggal</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($sp->count() > 0)
                            @foreach ($sp as $s)
                            {{-- @if($s->tanggal != 0) --}}

                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $s->karyawan->nama }}</td>
                                <td>{{ $s->status }}</td>
                                <td>{{ $s->tanggal->toFormattedDateString() }}</td>
                                <td>{{ $s->keterangan }}</td>
                                <td>
                                    <a href="{{ route('sp.edit', $s->id) }}">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                                    <a href="{{ route('sp.show', $s->id) }}">
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
                    {{ $sp->links() }}
                </div>

    </section>
</div>

@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop

