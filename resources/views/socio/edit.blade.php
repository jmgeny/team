@extends('socio.layout')

@section('content')
	<div class="row">
		<div class="col-sm-8">
			<h1>Editar Socio</h1>
			<a href="{{route('socios.index')}}" class="btn btn-default pull-right">Listar</a>
			{{$socio->nombre}}
		</div>

		<div class="col-sm-4">
			Lat
		</div>
	</div>
	

@endsection