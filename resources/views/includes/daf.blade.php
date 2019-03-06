<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- link icon --}}
    <link rel="icon" href="{{ asset('assets/bootstrap/mja.ico') }}">

    <title> Form Pendafataran Calon Karyawan SIDAK </title>

    <link rel="icon" href="{{ asset('assets/bootstrap/mja.ico') }}">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/skins/skin-red.min.css') }}">
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styleform.css') }}">


    @yield('css')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="app">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('js/styleform.js') }}"></script> --}}
    {{-- <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script> --}}
    <script src="{{ asset('js/fl.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/styleform.js') }}"></script>

    <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>


    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script type="text/javascript">
        $('[data-toggle="datepicker"]').datepicker();
                $('[data-toggle="datepicker-date"]').datepicker({
                    format: 'mm/dd/yyyy',
                    endDate: 'today'
                });
                $('[data-toggle="datepicker-year"]').datepicker({
                    format: 'yyyy',
                    endDate: 'today'
                });
    </script>

    @yield('js')
</body>
</html>
