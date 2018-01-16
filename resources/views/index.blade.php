@extends('layouts.principal')

@section('titulo','ASiF')

@section('content')
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-8">
		  <div class="btn-group btn-group-lg">
		    <button type="button" class="btn btn-primary">Apple</button>
		    <button type="button" class="btn btn-primary">Samsung</button>
		    <button type="button" class="btn btn-primary">Sony</button>
		  </div>      
    </div>
  </div>
</div>
@endsection