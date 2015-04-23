@extends('app')

@section('content')
	<div class="container">
		<h1>Vozač</h1>
		
		<div class="form-group">
			<label>Ime</label>
			<p class="form-control-static">{{ $driver->name }}</p>
		</div>

		<div class="form-group">
			<label>Email</label>
			<p class="form-control-static">{{ $driver->email }}</p>
		</div>

		<div class="form-group">
			<label>Broj vozačke</label>
			<p class="form-control-static">{{ $driver->licence_number }}</p>
		</div>

	</div>
@stop