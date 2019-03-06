@extends('adminlte::page')

@section('content')
    @include('includes.error')
    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new Document
        </div>
        <div class="panel-body">
            <form action="{{ route('docs.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="tag">Document</label>
                    <input type="text" name="doc" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Store Document <span class="fa fa-upload"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
