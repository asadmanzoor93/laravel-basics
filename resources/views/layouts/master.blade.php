<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->

    <link href="{{ URL::asset('theme/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('theme/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('theme/dist/css/sb-admin-2.css') }}" rel="stylesheet">


    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('theme/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('theme/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <link href="{{ URL::asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}" rel="stylesheet">
    <link href="{{ URL::asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}" rel="stylesheet">
    <![endif]-->

    <!-- jQuery -->
    <script src="{{ URL::asset('theme/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('theme/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('theme/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::asset('theme/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ URL::asset('theme/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('theme/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ URL::asset('theme/data/morris-data.js') }}"></script>


    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('theme/dist/js/sb-admin-2.js') }}"></script>

</head>

<body id="page-top" class="index">

    @include('layouts.partials._navigation')

    <div class="container">
        @yield('content')
    </div>

</body>
</html>