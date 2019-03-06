@extends('adminlte::page')
@section('content')
<div class="panel panel-danger">
    <div class="panel-heading">
        <h4 class="text-center"><b>TABEL USER</b></h4>
        <a href="{{ URL::to('admin/users/create') }}" class="btn btn-info">Tambah User</a>
    </div>
    <div class="panel-body">
        <table class="table teble-hover">
            <thead>
                <th>User Id</th>
                <th>Foto</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @if ($users->count() > 0)
                    @foreach ($users as $user)
                        <tr>
                            <td><b>{{ $user->id }}</b></td>
                            <td>
                                @if($user->profile->avatar)
                                <img src="{{ asset($user->profile->avatar) }}" alt="" width="90" height="110" style="border-radius: 50%;">
                                @else
                                <img src="{{ asset('uploads/avatars/27.png') }}" alt="" width="90" height="110" style="border-radius: 50%;">
                                @endif
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>

                                @if(Auth::user()->admin == 1)
                                    @if ($user->admin != 1)
                                    @if($user->admin == 1)
                                        <button onclick="location.href='{{ URL::to('admin/users/'. $user->id . '/edit') }}'" type="button"class="btn btn-sm btn-warning">
                                            Remove Permissions
                                        </button>
                                    @else
                                        <button onclick="location.href='{{ URL::to('admin/users/'. $user->id . '/edit') }}'" type="button" class="btn btn-sm btn-success">
                                            Make Admin
                                        </button>
                                    @endif
                                    @endif
                                @else
                                    <span class="text-danger">Hubungi Admin</span>
                                @endif
                                
                            </td>
                            <td>
                                @if (Auth::id() !== $user->id)
                                @if(Auth::user()->admin == 1)
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><span class="fa fa-trash-o"></span></button>
                                </form>
                                @else
                                <span class="btn-info">Not Permission</span>
                                @endif
                                
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                <tr>
                    <th colSpan="5" class="text-center">No Users</th>
                </tr>
                @endif
            </tbody>
        </table>
        {{-- {{ $users->links() }} --}}
    </div>
</div>
@endsection
