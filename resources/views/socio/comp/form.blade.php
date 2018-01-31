<div class="form-group">
	{!! Form::label('nombre','Nombre') !!}
	{!! Form::text('nombre', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido','Apellido') !!}
	{!! Form::text('apellido', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('direccion','Dirección') !!}
	{!! Form::text('direccion', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email','e-mail') !!}
	{!! Form::text('email', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telefono','Telefono') !!}
	{!! Form::text('telefono', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('dni','DNI') !!}
	{!! Form::number('dni', null, ['class' =>'form-control']) !!}
</div>

 <div class="form-group">
	{!! Form::label('nacimiento','Fecha de Nacimiento') !!}
	{!! Form::date('nacimiento') !!}
	{{-- \Carbon\Carbon::now() --}}
</div>

<div class="form-group">
	{!! Form::label('estadoCivil','Estado Civil') !!}
	{!! Form::select('estadoCivil', 
				array('1' => 'Soltero', 
					  '2' => 'Casado'),null, ['class' =>'form-control']
					  ) !!}
</div>

<div class="form-group">
	{!! Form::label('localidad_id','Localidad') !!}
	{!! Form::select('localidad_id',array('1' => 'Bragado', '2' => 'Chivilcoy'),null, ['class' =>'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('genero','Genero') !!}
	{!! Form::select('genero', array('M' => 'Masculino', 'F' => 'Femenino'),null, ['class' =>'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('amputado','Tiene una amputación?') !!}
	{!! Form::select('amputado', array('SI' => 'SI', 'NO' => 'NO'),null, ['class' =>'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('equipado','Usa protesis?') !!}
	{!! Form::select('equipado', array('SI' => 'SI', 'NO' => 'NO'),null, ['class' =>'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('obraSocial','Tiene obra social?') !!}
	{!! Form::select('obraSocial', array('SI' => 'SI', 'NO' => 'NO'),null, ['class' =>'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('deporte_id','Que deprote practica?') !!}
	{!! Form::select('deporte_id', array('0' => 'Ninguno', '1' => 'Triatlon', '2' => 'Atletismo'),null, ['class' =>'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('trabajo_id','Donde trabaja?') !!}
	{!! Form::select('trabajo_id', 
				array('0' => 'Desocupado', '1' => 'Programador', 
					  '2' => 'Contador'),null, ['class' =>'form-control']
					  ) !!}
</div>
{{-- fin --}}
<div class="form-group">
	{!! Form::submit('Agregar', ['class' =>'btn btn-primary']) !!}
</div>