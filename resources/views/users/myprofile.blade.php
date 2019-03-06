@extends('adminlte::page')
@section('content')
    @include('includes.error')
    <section class="content">
    <div class="row justify-content-center">
      <div class="panel panel-default">
          <div class="panel-heading"> <h2> My Profile </h2></div>

          <div class="panel-body">
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif

              <div class="box box-primary">
                <div class="box-body box-profile">
                  @if($user->profile->avatar)
                    <img class="profile-user-img img-responsive img-circle" src="{{ asset($user->profile->avatar) }}" alt="User profile picture">
                  @else
                    <img src="{{ asset('uploads/avatars/27.png') }}" class="profile-user-img img-responsive img-circle" alt="User profile picture">
                  @endif

                  <h3 class="profile-username text-center">{{ $user->name }}</h3>

                  <p class="text-muted text-center">{{ $user->email }}</p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b><i class="fa fa-facebook-square" style="font-size:36px;color:darkblue"></i></b> <a class="pull-right">{{ $user->profile->facebook }}</a>
                    </li>
                    <li class="list-group-item">
                      <b><i class="fa fa-youtube-play" style="font-size:36px;color:red"></i></b> <a class="pull-right">{{ $user->profile->youtube }}</a>
                    </li>
                    <li class="list-group-item">
                      <b><i class="fa fa-commenting" style="font-size:36px;color:mediumslateblue"></i></b> <a class="pull-right">{{ $user->profile->about }}</a>
                    </li>
                  </ul>

                  <a href="{{ route('user.profile') }}" class="btn btn-primary btn-block"><b>Edit</b></a>
                </div>
                <!-- /.box-body -->
              </div>
          </div>
      </div>
    </div>
</section>
@endsection
