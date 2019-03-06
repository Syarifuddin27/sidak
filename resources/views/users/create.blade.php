@extends('adminlte::page')
@section('content')
    @include('includes.error')
        <div class="panel panel-default">
            <div class="panel-heading">
                Create a new User
            </div>
            <div class="panel-body">
                <form action="{{ route('users.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add User <i class="fa fa-upload"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection



<link rel="stylesheet" href="/css/admin_custom.css">
