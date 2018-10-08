<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Descripcion del atleta</title>


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">

    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    {{-- <link href="css/resume.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/resume.css') }}">
  </head>

  <body id="page-top">

    @yield('content')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    {{-- <script src="js/resume.min.js"></script> --}}
        <script src="{{ asset('js/resume.min.js') }}"></script>

  </body>

</html>
