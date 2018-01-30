@extends('socio.layout')

@section('content')
	<div class="row">
		<div class="col-sm-8">
			<h1>Vista shorw</h1>
			<a href="{{route('socios.edit',$socio->id)}}" class="btn btn-default pull-right">Editar</a>
			{{$socio->nombre}}
		</div>

		<div class="col-sm-4">
			Lat
		</div>
	</div>
	

@endsection