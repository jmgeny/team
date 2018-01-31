@extends('socio.layout')

@section('content')
	<div class="row">
		<div class="col-sm-8">
			@include('error')
			<h1>Editar Socio</h1>

			{!! Form::model($socio, ['route' => ['socios.update',$socio->id], 'method'=>'PUT']) !!}

				@include('socio.comp.form')

			{!! Form::close() !!}

		</div>

		<div class="col-sm-4">
			<a href="{{ route('socios.create') }}" class="btn btn-default">Nuevo</a>
			<a href="{{route('socios.index')}}" class="btn btn-default pull-right">Listar</a>
		</div>
	</div>
	

@endsection