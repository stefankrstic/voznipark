@extends('app')

@section('content')
	<div class="container">
		<h1>Model</h1>
		
		<div class="form-group">
			<label>Naziv</label>
			<p class="form-control-static">{{ $type->name }}</p>
		</div>

		<div class="form-group">
			<label>Proizvodjac</label>
			<p class="form-control-static">{{ $type->manufacturer->name }}</p>
		</div>
	</div>
@stop