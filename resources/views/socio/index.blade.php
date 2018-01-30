@extends('socio.layout')

@section('content')
	<h1>Listado de Productos</h1>
	
		<div class="table-responsive">
			@include('socio.comp.info')
			<table class="table">
			    <thead>
			      <tr>
			        <th>Apellido</th>
			        <th>Nombre</th>
			        <th>Email</th>
			        <th>Amputado</th>
			        <th>Ver</th>
			        <th>Editar</th>
			        <th>Elimina</th>
			      </tr>
			    </thead>
			    <tbody>
			@foreach($socios as $socio)    	
			      <tr>
			        <td>{{$socio->apellido}}</td>
			        <td>{{$socio->nombre}}</td>
			        <td>{{$socio->email}}</td>
			        <td>{{$socio->amputado}}</td>
			        <td><a href="{{route('socios.show',$socio->id)}}" class="btn btn-link">Ver</a></td>
			        <td><a href="{{route('socios.edit',$socio->id)}}" class="btn btn-link">Editar</a></td>
			        <td>
			        	<form action="{{route('socios.destroy',$socio->id)}}" method="POST" class="pull-right">
                  			{{ csrf_field() }}
                    		<input type="hidden" name="_method" value="DELETE">
                    		<button class="btn btn-link">Eliminar</button>
                  		</form>

			        </td>
			      </tr>
			@endforeach      
			    </tbody>
			</table>
		</div> 
{{$socios->links()}}		
@endsection
