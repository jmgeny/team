<div class="form-group">
	{!! Form::label('titulo','Nombre') !!}
	{!! Form::text('titulo', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('texto','Apellido') !!}
	{!! Form::text('texto', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Agregar', ['class' =>'btn btn-primary']) !!}
</div>