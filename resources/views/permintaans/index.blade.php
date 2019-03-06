@extends('adminlte::page')
@section('content')
<div class="panel panel-default panel-danger">
    <div class="panel-heading">
        <h3 class="text-center"> <b>DATA PERMINTAAN KARYAWAN</b></h3>
        <a href="{{ route('permintaan.create') }}" class="btn btn-danger btn-sm">Tambah Form Order</a>
    </div>
        <div class="panel-body">
            <div class="col-md-12 text-right">
                <form method="get" action="{{ route('permintaan.index') }}" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="c" class="form-control" placeholder="Cari Devisi" value="{{ isset($c) ? $c : '' }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"> Search</i></button>
                    </div>
                </form>
            </div>
            <br>

            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-xs-6">
                        <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                        <p><small>Belum Di Konfirmasi <span class="badge" style="background-color: #007bff">{{ $pNconfir }}</span></small></p>
                    </div>
                    <div class="stepwizard-step col-xs-6">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                        <p><small>Sudah diKonfirmasi <span class="badge" style="background-color: #007bff">{{ $konfir }}</span></small></p>
                    </div>

                </div>
            </div>
            <div class="panel panel-danger setup-content" id="step-1">
                <section class="invoice">
                    <div class="row invoice-info">
                        <table id="permintaan-table" class="table table-hover" >
                            <thead class="thead-dark bes">
                                <tr>
                                    <th width="30">No</th>
                                    <th>Kode</th>
                                    <th>Unit</th>
                                    <th>Tanggal Order</th>
                                    <th>Bagian Pekerjaan</th>
                                    <th>System Kerja</th>
                                    <th>Kebutuhan Unit</th>
                                    <th>Create By</th>
                                    <th>Proses</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($permintaan->count() > 0)
                                @foreach ($permintaan as $permin)
                                @if($permin->cek != 1)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $permin->order_number }}</td>
                                        <td class="bes">{{ $permin->unit }}</td>
                                        <td>{{ $permin->tgl_order->toFormattedDateString() }}</td>
                                        <td>{{ $permin->jabatan->name }}</td>
                                        <td>{{ $permin->sistem_kerja }}</td>
                                        <td><span class="badge" style="background-color: #ffc107;">{{ $permin->jumlah }}</span></td>
                                        <td>{{ $permin->user->name }}
                                        </td>
                                        <td>
                                            <a href="{{ route('permintaan.edit', $permin->id) }}" title="Edit Data">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a href="{{ route('permintaan.show', $permin->id) }}" title="Show">
                                                    <span class="fa fa-eye"></span>
                                            </a>
                                        </td>
                                        <td>
                                            @if(Auth::user()->admin == 1)
                                            <form action="{{ url('admin/konOrder', [$permin->id]) }}" method="POST">
                                            @csrf
                                                <input type="hidden" name="_method" value="PUT">
                                                @if($permin->cek == 0)
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi Order Karyawan!!!?')" title="Konfirmasi">Verify</button>
                                                @else
                                                Verified  by <br>
                                                <span> <b>{{ $permin->verifyOrder->name }}</b></span>
                                                <p>at {{ $permin->verifyOrder->created_at->diffForHumans() }}</p>
                                                @endif
                                            </form>
                                            @else
                                            <span class="text-danger">Hubungi Admin</span>
                                            @endif
                                            
                                        </td>
                                    </tr>
                                @endif
                                @endforeach 
                                @else
                                    <tr>
                                        <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                                    </tr>
                                @endif

                            </tbody>
                            {{ $permintaan->appends(['s' => $s])->links() }}

                            {{ $permintaan->appends(['c' => $c])->links() }}
                        </table>
                        {{ $permintaan->links() }}
                    </div>
                </section>
            </div>
            <div class="panel panel-danger setup-content" id="step-2">
                <section class="invoice">
                    <div class="row invoice-info">
                        <table id="permintaan-table" class="table table-hover table table-responsive text-center" >
                            <thead class="thead-dark bes">
                                <tr>
                                    <th width="30">No</th>
                                    <th>Kode</th>
                                    <th>Unit</th>
                                    <th>Tanggal Order</th>
                                    <th>Bagian Pekerjaan</th>
                                    <th>System Kerja</th>
                                    <th>Kebutuhan Unit</th>
                                    <th>Create By</th>
                                    <th>Proses</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($permintaan->count() > 0)
                                @foreach ($permintaan as $permin)
                                @if($permin->cek != 0)
                                    <tr>
                                        <td>{{ $noK++ }}</td>
                                        <td>{{ $permin->order_number }}</td>
                                        <td class="bes">{{ $permin->unit }}</td>
                                        <td>{{ $permin->tgl_order->toFormattedDateString() }}</td>
                                        <td>{{ $permin->jabatan->name }}</td>
                                        <td>{{ $permin->sistem_kerja }}</td>
                                        <td>
                                            <button class="btn btn-dark">
                                            
                                            {{-- {{  $permin->jumlah - $permin->karyawanpermintaan->count() }} --}}
                                            <span class="badge" style="background-color: #ffc107;">{{ $permin->jumlah }}</span>
                                            <span class="badge" style="background-color: #007bff;">{{ $permin->karyawanpermintaan->count() }}</span> =

                                            @if($permin->jumlah - $permin->karyawanpermintaan->count()  == 0)
                                                <span class="badge" style="background-color: #28a745;">Lunas</span>
                                            @else
                                                <span class="badge" style="background-color: red;">{{ $permin->jumlah - $permin->karyawanpermintaan->count() }}</span>
                                            @endif
                                            </button>
                                            
                                        </td>

                                        <td>{{ $permin->user->name }}
                                            {{-- <a href="" class="btn btn-info btn-sm">Verify</a> --}}
                                            
                                        </td>
                                        <td>
                                            <a href="{{ route('permintaan.edit', $permin->id) }}" title="Edit Data">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a href="{{ route('permintaan.show', $permin->id) }}" title="Show">
                                                    <span class="fa fa-eye"></span>
                                            </a>
                                        </td>
                                        {{-- Konfirmasi Permintaan Karyawan --}}
                                        <td>
                                            <form action="{{ url('admin/konOrder', [$permin->id]) }}" method="POST">
                                            @csrf
                                                <input type="hidden" name="_method" value="PUT">

                                                @if($permin->cek == 0)
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi Order Karyawan!!!?')" title="Konfirmasi">Verify</button>
                                                @else
                                                Verified  by <br>
                                                <span> <b>{{ $permin->verifyOrder->name }}</b></span>
                                                <p>at {{ $permin->verifyOrder->created_at->diffForHumans() }}</p>
                                                @endif

                                            </form>
                                        </td>
                                    </tr>
                                @endif
                                @endforeach 
                                @else
                                    <tr>
                                        <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                                    </tr>
                                @endif

                            </tbody>
                            {{ $permintaan->appends(['s' => $s])->links() }}

                            {{ $permintaan->appends(['c' => $c])->links() }}
                        </table>
                        {{ $permintaan->links() }}
                    </div>
                </section>
            </div>

            <br>
        </div>
</div>

@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop

@section('css')
<style type="text/css">
.besar{
text-transform: uppercase;
}
.capital{
    text-transform: capitalize;
}
.prime{
    background-color: #007bff;
}
</style>
@endsection
