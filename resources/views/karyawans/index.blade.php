@extends('adminlte::page')
@section('content')
<div class="panel panel-default panel-danger">
    <div class="panel-heading">
        <h3 class="text-center"><b>DATA KARYAWAN</b></h3>
            <a href="{{ route('karyawan.create') }}" class="btn btn-danger btn-sm">Tambah Karyawan Baru</a>
    </div>
    <div class="panel-body">
        <div class="col-md-12 text-center">
            <form method="get" action="{{ route('karyawan.index') }}" class="form-inline">
                <div class="form-group">
                    <input type="text" name="s" class="form-control" placeholder="Cari Karyawan" value="{{ isset($s) ? $s : '' }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"> Search</i></button>
                </div>
            </form>
        </div>
        <br>
        <br>
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p><small>Calon Karyawan <span class="badge prime">{{ $cBaru }}</span></small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                    <p><small>Konfirmasi <span class="badge prime">{{ $konfir }}</span></small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                    <p><small>Karyawan Aktif <span class="badge prime">{{ $aktif }}</span></small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
                    <p><small>Resign <span class="badge prime">{{ $res }}</span></small></p>
                </div>
            </div>
        </div>
        <div class="panel panel-danger setup-content" id="step-1">
            <section class="invoice">
                <div class="row invoice-info">
                    <table id="karyawan-table" class="table table-hover table table-responsive" >
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Kode Dokumen</th>
                                <th>Name</th>
                                <th>Detail</th>
                                <th>Alamat</th>
                                <th>Create By</th>
                                <th>Action</th>
                                <th>Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($karyawan->count() > 0)
                                @foreach ($karyawan as $kry)
                                @if($kry->cek != 1)
                                    <tr>
                                        <td>{{ $no++ }} </td>
                                        <td><b>{{ $kry->order_number }}</b></td>
                                        <td class="capital">{{ $kry->nama }}</td>
                                        <td>
                                            <ul>
                                                <li>Hp : {{ $kry->nohp }}</li>
                                                <li>Usia : {{ $kry->umur }}</li>
                                                <li class="capital">lulusan : {{ $kry->pendidikan->pendidikan }}</li>
                                                <li>No KTP : {{ $kry->noktp }}</li>
                                                <li>Status : {{ $kry->status }}</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li class="capital">Prov : {{ $kry->provinsi }}</li>
                                                <li class="capital">Kab : {{ $kry->kabupaten }}</li>
                                                <li class="capital">Kec : {{ $kry->kecamatan }}</li>
                                                <li class="capital">Ds. : {{ $kry->desa }}</li>
                                                <li class="fcapital">Alamat : {{ $kry->alamat_lengkap }}</li>
                                            </ul>
                                        </td>
                                        <td>{{ $kry->user->name }}</td>

                                        <td>
                                            <a href="{{ route('karyawan.edit', $kry->id) }}">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                        </td>
                                        <td>
                                            @if(Auth::user()->admin == 1)
                                            <form action="{{ url('admin/konfir', [$kry->id]) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="PUT">

                                                @if($kry->cek == 0)
                                                <button type="submit" class="btn btn-info btn-sm" onclick="return confirm('Konfirmasi Calon Karyawan!!!?')">Konfirmasi</button>
                                                @else
                                                Verified  by
                                                <span> <b>{{ $kry->verify->name }}</b></span>
                                                <p>at {{ $kry->verify->created_at->diffForHumans() }}</p>
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
                        {{ $karyawan->appends(['s' => $s])->links() }}
                    </table>
                    {{ $karyawan->links() }}
                </div>
            </section>
        </div>

        <div class="panel panel-danger setup-content" id="step-2">
            <section class="invoice">
                <div class="row invoice-info">
                    <table id="karyawan-table" class="table table-hover table table-responsive" >
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Kode Dokumen</th>
                                <th>Name</th>
                                <th>Detail</th>
                                <th>Alamat</th>
                                <th>Create By</th>
                                <th>Action</th>
                                <th>Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($karyawan->count() > 0)
                                @foreach ($karyawan as $kry)
                                @if($kry->cek != 0)
                                @if($kry->category_id == 1)
                                    <tr>
                                        <td>{{ $noV++ }} </td>
                                        <td><b>{{ $kry->order_number }}</b></td>
                                        <td class="capital">{{ $kry->nama }}</td>
                                        <td>
                                            <ul>
                                                <li>Hp : {{ $kry->nohp }}</li>
                                                <li>Usia : {{ $kry->umur }}</li>
                                                <li class="capital">lulusan : {{ $kry->pendidikan->pendidikan }}</li>
                                                <li>No KTP : {{ $kry->noktp }}</li>
                                                <li>Status : {{ $kry->status }}</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li class="capital">Prov : {{ $kry->provinsi }}</li>
                                                <li class="capital">Kab : {{ $kry->kabupaten }}</li>
                                                <li class="capital">Kec : {{ $kry->kecamatan }}</li>
                                                <li class="capital">Ds. : {{ $kry->desa }}</li>
                                                <li class="fcapital">Alamat : {{ $kry->alamat_lengkap }}</li>
                                            </ul>
                                        </td>
                                        <td>{{ $kry->user->name }}</td>

                                        <td>
                                            <a href="{{ route('karyawan.edit', $kry->id) }}">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            {{-- <a href="{{ route('karyawan.show', $kry->id) }}">
                                                <span class="fa fa-eye"></span>
                                            </a> --}}
                                        </td>
                                        <td>

                                            <form action="{{ url('admin/konfir', [$kry->id]) }}" method="POST">
                                                    @csrf
                                                <input type="hidden" name="_method" value="PUT">

                                                @if($kry->cek == 0)
                                                <button type="submit" class="btn btn-info btn-sm" onclick="return confirm('Konfirmasi Calon Karyawan!!!?')"><span class="fa fa-check"></span></button>
                                                @else
                                                Verified  by <br>
                                                <span> <b>{{ $kry->verify->name }}</b></span>
                                                <p>at {{ $kry->verify->created_at->diffForHumans() }}</p>
                                                @endif

                                            </form>

                                        </td>
                                    </tr>
                                @endif
                                @endif

                                @endforeach
                            @else
                                <tr>
                                    <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                                </tr>
                            @endif
                        </tbody>
                        {{ $karyawan->appends(['s' => $s])->links() }}
                    </table>
                    {{ $karyawan->links() }}
                </div>
            </section>
        </div>

        <div class="panel panel-danger setup-content" id="step-3">
            <section class="invoice">
                <div class="row invoice-info">
                    <table id="karyawan-table" class="table table-striped" >
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Kode Dokumen</th>
                                <th>Name</th>
                                <th>Detail</th>
                                <th>Alamat</th>
                                <th>Create By</th>
                                <th>Action</th>
                                <th>Verifikasi</th>
                                <th>Devisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($karyawan->count() > 0)
                                @foreach ($karyawan as $kry)
                                @if($kry->category_id == 2)
                                @if($kry->cek != 0)
                                    <tr>
                                        <td>{{ $noA++ }} </td>
                                        <td><b><a href="{{ route('history.single', $kry->slug ) }}">{{ $kry->order_number }}</a></b></td>
                                        <td class="capital">{{ $kry->nama }}</td>
                                        <td>
                                            <ul>
                                                <li>Hp : {{ $kry->nohp }}</li>
                                                <li>Usia : {{ $kry->umur }}</li>
                                                <li class="capital">lulusan : {{ $kry->pendidikan->pendidikan }}</li>
                                                <li>No KTP : {{ $kry->noktp }}</li>
                                                <li>Status : {{ $kry->status }}</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li class="capital">Prov : {{ $kry->provinsi }}</li>
                                                <li class="capital">Kab : {{ $kry->kabupaten }}</li>
                                                <li class="capital">Kec : {{ $kry->kecamatan }}</li>
                                                <li class="capital">Ds. : {{ $kry->desa }}</li>
                                                <li class="fcapital">Alamat : {{ $kry->alamat_lengkap }}</li>
                                            </ul>
                                        </td>
                                        <td>{{ $kry->user->name }}</td>

                                        <td>
                                            <a href="{{ route('karyawan.edit', $kry->id) }}">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a href="{{ route('karyawan.show', $kry->id) }}">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                        </td>
                                        <td>

                                            <form action="{{ url('admin/konfir', [$kry->id]) }}" method="POST">
                                                    @csrf
                                                <input type="hidden" name="_method" value="PUT">

                                                @if($kry->cek == 0)
                                                <button type="submit" class="btn btn-info btn-sm" onclick="return confirm('Konfirmasi Calon Karyawan!!!?')"><span class="fa fa-check"></span></button>
                                                @else
                                                Verified  by <br>
                                                <span> <b>{{ $kry->verify->name }}</b></span>
                                                <p>at {{ $kry->verify->created_at->diffForHumans() }}</p>
                                                @endif

                                            </form>

                                        </td>
                                        <td>
                                            {{ $kry->jabatan->name }}
                                        </td>
                                    </tr>
                                @endif
                                @endif
                                @endforeach
                            @else
                                <tr>
                                    <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                                </tr>
                            @endif
                        </tbody>
                        {{ $karyawan->appends(['s' => $s])->links() }}
                    </table>
                    {{ $karyawan->links() }}
                </div>
            </section>
        </div>

        <div class="panel panel-danger setup-content" id="step-4">
            <section class="invoice">
                <div class="row invoice-info">
                    <table id="karyawan-table" class="table table-hover table table-responsive" >
                        <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Kode Dokumen</th>
                                <th>Name</th>
                                <th>Detail</th>
                                <th>Alamat</th>
                                <th>Create By</th>
                                <th>Action</th>
                                <th>Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($karyawan->count() > 0)
                                @foreach ($karyawan as $kry)
                                @if($kry->category_id == 3)
                                @if($kry->cek != 0)
                                    <tr>
                                        <td>{{ $noR++ }} </td>
                                        <td><b><a href="{{ route('history.single', $kry->slug ) }}">{{ $kry->order_number }}</a></b></td>
                                        <td class="capital">{{ $kry->nama }}</td>
                                        <td>
                                            <ul>
                                                <li>Hp : {{ $kry->nohp }}</li>
                                                <li>Usia : {{ $kry->umur }}</li>
                                                <li class="capital">lulusan : {{ $kry->pendidikan->pendidikan }}</li>
                                                <li>No KTP : {{ $kry->noktp }}</li>
                                                <li>Status : {{ $kry->status }}</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <li class="capital">Prov : {{ $kry->provinsi }}</li>
                                                <li class="capital">Kab : {{ $kry->kabupaten }}</li>
                                                <li class="capital">Kec : {{ $kry->kecamatan }}</li>
                                                <li class="capital">Ds. : {{ $kry->desa }}</li>
                                                <li class="fcapital">Alamat : {{ $kry->alamat_lengkap }}</li>
                                            </ul>
                                        </td>
                                        <td>{{ $kry->user->name }}</td>

                                        <td>
                                            <a href="{{ route('karyawan.edit', $kry->id) }}">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a href="{{ route('karyawan.show', $kry->id) }}">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                        </td>
                                        <td>

                                            <form action="{{ url('admin/konfir', [$kry->id]) }}" method="POST">
                                                    @csrf
                                                <input type="hidden" name="_method" value="PUT">

                                                @if($kry->cek == 0)
                                                <button type="submit" class="btn btn-info btn-sm" onclick="return confirm('Konfirmasi Calon Karyawan!!!?')"><span class="fa fa-check"></span></button>
                                                @else
                                                Verified  by <br>
                                                <span> <b>{{ $kry->verify->name }}</b></span>
                                                <p>at {{ $kry->verify->created_at->diffForHumans() }}</p>
                                                @endif

                                            </form>

                                        </td>
                                    </tr>
                                @endif
                                @endif
                                @endforeach
                            @else
                                <tr>
                                    <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                                </tr>
                            @endif
                        </tbody>
                        {{ $karyawan->appends(['s' => $s])->links() }}
                    </table>
                    {{ $karyawan->links() }}
                </div>
            </section>
        </div>
        
    </div>
</div>

@endsection

@section('js')
<script>
    console.log('Hi!');
</script>
<script type="text/javascript">
    var data = '';
    function functionName() {
        console.log(document.getElementById('name').value);
        var name = document.getElementById('name').value;

        var req = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var sm = '_token={{csrf_token()}}&id='+name;
            req.open('POST', '/ajax/searchName', true);
            req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            req.send(sm);
            req.onreadystatechange = function()
            {
                if(req.readyState == 4){

                    // alert(req.responseText); //just for debug\
                  see_resp.innerHTML = req.responseText;
                  // req.responseText;
                  console.log(data);
                  // console.log(id);
                }
            }
    }
</script>
@endsection

@section('css')
<style type="text/css">
.capital{
text-transform: uppercase;
}
.fcapital{
    text-transform: capitalize;
}
.prime{
    background-color: #007bff;
}
</style>
@endsection
