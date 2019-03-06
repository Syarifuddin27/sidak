{{-- @extends('layouts.app3') --}}
@extends('adminlte::page')
@section('content')
    <div class="panel panel-danger panel-default">
        <div class="panel-heading">
            <h5><b>TABEL DEVISI</b></h5>
            <a href="{{ route('jabatan.create') }}" class="btn btn-danger btn-sm">Add New Jabatan</a>
        </div>
        <div class="panel-body">
            <div class="col-md-12 text-center">
                <form method="get" action="{{ route('jabatan.index') }}" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control" placeholder="Cari Karyawan" value="{{ isset($s) ? $s : '' }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"> Search</i></button>
                    </div>
                </form>
            </div>
            <table class="table teble-hover">
                <thead>
                    <th>No</th>
                    <th>Jabatan Name</th>
                    <th> Editing</th>
                    <th>Deleting</th>
                </thead>
                <tbody>
                    @if ($jabatan->count() > 0) 
                    @foreach ($jabatan as $jbt)
                    <tr>
                        <td>{{ $jbt->id }}</td>
                        <td>{{ $jbt->name }}</td>
                        <td>
                            <a href="{{ route('jabatan.edit', $jbt->id) }}" class="btn btn-primary btn-sm">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                        </td>
                        <td>
                            <form action="{{ route('jabatan.destroy',$jbt->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><span class="fa fa-trash-o"></span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach @else
                    <tr>
                        <th colSpan="5" class="text-center">No Devisi yet.</th>
                    </tr>
                    @endif

                </tbody>
                {{ $jabatan->appends(['s' => $s])->links() }}
            </table>
            {{ $jabatan->links() }}
        </div>

    </div>
@endsection

