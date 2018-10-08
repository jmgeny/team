<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Equipo de Ciclismo de Bragado">
    <meta name="author" content="Juan Manuel Geny">

    <title>Cicles Club</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('css/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/stylish-portfolio.css') }}" rel="stylesheet">
  </head>

  <body id="page-top">
    
    @yield('content')
   
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/stylish-portfolio.min.js') }}"></script>

  </body>

</html>
