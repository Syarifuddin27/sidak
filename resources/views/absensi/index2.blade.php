@extends('adminlte::page')
@section('content')
<div class="panel panel-default panel-danger">
    <div class="panel-heading">
        <h4> MANAGE HISTORY ABSENSI</h4>
    </div>
    <div class="panel-body">
        <a href="{{ route('absensi.create') }}" class="btn btn-danger btn-sm">Tambah History absen</a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th width="30">No</th>
                    <th>Nama Karyawan</th>
                    <th>Tanggal</th>
                    <th>Ketidak Hadiran</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                ?>
                    @if ($absensi->count() > 0) 
                    @foreach ($absensi as $abs)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td class="bes">{{ $abs->karyawan->nama }}</td>
                        <td>{{ $abs->tanggal }}</td>
                        <td>{{ $abs->sebab }}</td>
                        <td class="bes">{{ $abs->keterangan }}</td>
                    </tr>
                    @endforeach 
                    @else
                    <tr>
                        <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                    </tr>
                    @endif

            </tbody>
        </table>
        {{-- <div id='calendar'></div> --}}

<!doctype html>

<html lang="en">

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script> --}}

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> --}}

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> --}}

</head>

<body>
<div class="row">
  <div class="col-md-9">
    {!! $calendar->calendar() !!}

    {!! $calendar->script() !!}
  </div>
  <div class="col-md-3">
    <div class="bg-primary">Hadir</div>
  </div>
</div>


    


</body>

</html>


    </div>
    </div>
</div>

@stop

@section('js')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        console.log('Hi!');
    </script>

    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
        //     $('#calendar').fullCalendar({
        //         // put your options and callbacks here
        //         defaultView: 'agendaWeek',
        //     })
        });
    </script>

@stop

@section('css')

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

@endsection

