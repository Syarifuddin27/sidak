@extends('adminlte::page')
@section('content')
    <div class="panel panel-danger panel-default">
        <div class="panel-heading">
            <h5><b>TABEL DOKUMEN</b></h5>
            <a href="{{ route('docs.create') }}" class="btn btn-danger btn-sm">Add New Doc</a>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Dokument</th>
                        <th> Editing</th>
                        <th>Deleting</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($docs->count() > 0)
                    @foreach ($docs as $doc)
                    <tr>
                        <td>{{ $doc->doc }}</td>
                        <td>
                            <a href="{{ route('docs.edit', $doc->id) }}" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></a>
                        </td>
                        <td>
                            <form action="{{ route('docs.destroy', $doc->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><span class="fa fa-trash-o"></span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <th colSpan="5" class="text-center">No docs yet.</th>
                    </tr>
                    @endif

                </tbody>
            </table>
            {{-- {{ $docs->links() }} --}}
        </div>
    </div>
@endsection

