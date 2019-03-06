@extends('adminlte::page')
@section('content')
    <div class="panel panel-danger panel-default">
        <div class="panel-heading">
            <h5><b>TABEL CATEGORY</b></h5>
            <a href="{{ route('category.create') }}" class="btn btn-danger btn-sm">Add New Categories</a>
        </div>
        <div class="panel-body">
            <table class="table teble-hover">
                <thead>
                    <th>No</th>
                    <th>Category Name</th>
                    <th> Editing</th>
                    <th>Deleting</th>
                </thead>
                <tbody>
                    @if ($category->count() > 0) @foreach ($category as $ctg)
                    <tr>
                        <td>{{ $ctg->id }}</td>
                        <td>{{ $ctg->name }}</td>
                        <td>
                            <a href="{{ route('category.edit', $ctg->id) }}" class="btn btn-primary btn-sm">
                                                    <span class="fa fa-pencil"></span>
                                                </a>
                        </td>
                        <td>
                            <form action="{{ route('category.destroy',$ctg->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><span class="fa fa-trash-o"></span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach @else
                    <tr>
                        <th colSpan="5" class="text-center">No Categories yet.</th>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div>

    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
