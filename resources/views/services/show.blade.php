@extends('app')

@section('content')
	<div class="container">
		<h1>Servis</h1>
		
		<div class="form-group">
			<label>Naziv</label>
			<p class="form-control-static">{{ $service->name }}</p>
		</div>

		<div class="form-group">
			<label>Adresa</label>
			<p class="form-control-static">{{ $service->address }}</p>
		</div>
	</div>
@stop