@extends('layouts.principal')

@section('titulo','ASiF')

@section('content')
  <section class="row">
    <article class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <div class="social">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
      </div>
    </article>
    <article class="col-sm-8 div_boton">
      <a href="#contacto"><button class="boton1"> Contacto </button></a>
      <a href="#benefactor"><button class="boton2"> Donar </button></a>
      <a href="#"><button class="boton3"> Voluntariado </button></a>
      <p>Direccion de A.Si.F</p>
    </article>        
  </section>
@endsection