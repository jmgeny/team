@extends('socio.layout')

@section('content')
	<h1>Cargar nuevo socio</h1>
	<div class="row">
      <form class="col-sm-8" action="/socios/create" method="post" enctype="multipart/form-data">
	        {{ csrf_field() }}
	        <div class="form-group">
	        	<label for="">Nombre</label>
	        	<input type="text" class="form-control" name="nombre" value="" placeholder="Nombre">
	        </div>

	        <div class="form-group">
	        	<label for="">Apellido</label>
	        	<input type="text" class="form-control" name="apellido" value="" placeholder="Apellido">
	        </div>

	        <div class="form-group">
	        	<label for="">Dirección</label>
	        	<input type="text" class="form-control" name="direccion" value="" placeholder="Dirección">
	        </div>

	        <div class="form-group">
	        	<label for="">email</label>
	        	<input type="email" class="form-control" name="email" value="" placeholder="e-mail">
	        </div>

	        <div class="form-group">
	        	<label for="">DNI / Pasaprote</label>
	        	<input type="text" class="form-control" name="dni"  value="" placeholder="Identificación">
	        </div>

	        <div class="form-group">
	        	<label for="">Telefono</label>
	        	<input type="text" class="form-control" name="telefono" value="" placeholder="Telefono">
	        </div>                        

	        <div class="form-group">
	        	<input class="btn btn-primary" type="submit" name="" value="Agregar">
	        </div>
      </form>
    </div>  	

@endsection