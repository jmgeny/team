@extends('socio.layout')

@section('content')
	<div class="row">
		<div class="col-sm-8">
			@include('error')
			<h1>Crear Socio</h1>
			{!! Form::open(['route' => 'socios.store']) !!}

				@include('socio.comp.form')

			{!! Form::close() !!}
		</div>

		<div class="col-sm-4">
			<a href="{{route('socios.index')}}" class="btn btn-default pull-right">Listar</a>
		</div>
	</div>
 	

@endsection