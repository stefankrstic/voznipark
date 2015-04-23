@extends('app')

@section('content')
	<div class="container">
		<h1>Vozilo</h1>
		
		<div class="form-group">
			<label>Boja</label>
			<p class="form-control-static">{{ $car->color }}</p>
		</div>
		<div class="form-group">
			<label>Godina Proizvodnje</label>
			<p class="form-control-static">{{ $car->production_year }}</p>
		</div>

<div class="form-group">
			<label>Registacija</label>
			<p class="form-control-static">{{ $car->registration_number }}</p>
		</div>


		<div class="form-group">
			<label>Proizvodjac</label>
			<p class="form-control-static">{{ $car->type->manufacturer->name }}</p>
		</div>
		<div class="form-group">
			<label>Model</label>
			<p class="form-control-static">{{ $car->type->name }}</p>
		</div>
	</div>
@stop