@extends('adminlte::page')
@section('content')
    @include('includes.error')

    <div class="panel panel-danger">
        <div class="panel-heading">
            <h4><b>EDIT PROFIL USER</b></h4>
        </div>
        <div class="panel-body">
            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group col-md-2">
                    @if($user->profile->avatar)
                        <img src="{{ asset($user->profile->avatar) }} " width="100px" height="auto" />
                    @else
                        <img src="{{ asset('uploads/avatars/27.png') }}" alt="" width="100" height="auto">
                    @endif
                    <label for="image">Upload New Avatar</label>
                    <input type="file" name="avatar" class="form-control" style="border:hidden;">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Nama</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">New Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Facebook Profile</label>
                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">YouTube Profile</label>
                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="about">About You</label>
                    <textarea name="about" id="about" cols="3" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Profile <i class="fa fa-upload"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
