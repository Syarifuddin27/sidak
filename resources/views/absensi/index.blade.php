@extends('adminlte::page')
@section('content')
<div class="panel panel-default panel-danger">
  <div class="panel-heading">
    <h4> MANAGE HISTORY ABSENSI</h4>
  </div>
  <div class="panel-body">
    <a href="{{ route('absensi.create') }}" class="btn btn-danger btn-sm">Tambah History absen</a>

    <head>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>

    <body>
      <br><br>
      <div class="row">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-6">
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p><small>Calender</small></p>
                </div>
                <div class="stepwizard-step col-xs-5">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                    <p><small>List Attendance</small></p>
                </div>
            </div>
        </div>
        <div><br></div>
        <div class="panel panel-danger setup-content" id="step-1">
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading"><h2 class="text-center">Calender</h2></div>
              <div class="panel-body">
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3>Legend</h3>
              </div>
              <div class="panel-body text-center">
                <div class="panel" style="background-color: #FFFF00;">
                  <div class="panel-heading">Izin</div>
                </div>

                <div class="panel" style="background-color: red; color: white;">
                  <div class="panel-heading">Tidak Hadir</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-danger setup-content" id="step-2">
          <div class="panel">
            <div class="panel-heading">
              <h2>Sekarang</h2>
            </div>
            <div class="panel-body">
              <table class="table table-info" id="table_absen">
                <thead>
                  <tr>
                    <th>Kode Absen</th>
                    <th>Nama</th>
                    <th>Kode Jabatan</th>
                    <th>Status</th>
                    <th>Taggal</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </body>

  </div>

</div>

@stop

@section('js')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

    {{-- <script src="//code.jquery.com/jquery.js"></script> --}}
    <!-- DataTables sekarang -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/styleform.js') }}"></script>
    <script>
        console.log('Hi!');
    </script>

    <script>
        $(document).ready(function() {
          window.datatable = $('#table_absen').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{  route('api.absen') }}',
                type: 'GET',
                columns: [
                    { data: 'karyawan.kode_absen', name: 'karyawan.kode_absen' },
                    // { data: 'order_number', name: 'order_number' },
                    { data: 'karyawan.nama', name: 'karyawan.nama' },
                    { data: 'karyawan.jabatan_id', name: 'karyawan.jabatan_id' },
                    { data: 'sebab', name: 'sebab' },
                    { data: 'tanggal_awal', name: 'tanggal_awal' },
                    // {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>

@stop

@section('css')

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

  <link rel="stylesheet" href="{{ asset('css/styleform.css') }}">
@endsection