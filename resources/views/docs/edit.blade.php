@extends('adminlte::page')
@section('content')
@include('includes.error')
<div class="card">
    <div class="card-header">
        Edit Doc {{ $doc->doc }}
    </div>
    <div class="card-body">
        <form action="{{ action('DocController@update', $doc->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">

                <label for="name">Document</label>
                <input type="text" name="doc" class="form-control" value="{{ $doc->doc }}">
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
