<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="icon" href="{{ asset('assets/bootstrap/mja.ico') }}">
    {{-- <link rel="shortcut icon" href="images/favicon.png"> --}}

    <title>SIDAK</title>

    <link rel="icon" href="{{ asset('assets/bootstrap/mja.ico') }}">

    <!--Core CSS -->
    <link href="{{ asset('bs3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" /> --}}

    {{-- Flashy --}}
    <link rel="stylesheet" href="{{ asset('css/fl.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="lock-screen">

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('bs3/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fl.js') }}"></script>

</body>

</html>
