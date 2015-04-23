@extends('app')

@section('content')
	<div class="container">
		<h1>Izmena modela</h1>
		
		@include('partials.errors')
		
		{!! Form::model($car, ['route' => ['cars.update', $car->id], 'method' => 'put']) !!}
		
			<div class="form-group">
				<label>Boja</label>
				{!! Form::text('color', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				<label>Model</label>
				{!! Form::select('type_id', App\Type::lists('name','id'), null, ['class' => 'form-control']) !!}
			</div>
			
			<div class="form-group">
				<label>Registracija</label>
				{!! Form::text('registration_number', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				<label>Godina Proizvodnje</label>
				{!! Form::text('production_year', null, ['class' => 'form-control']) !!}
			</div>

			<button type="submit" class="btn btn-primary">Snimi</button>
		
		{!! Form::close() !!}

		<hr>

		{!! Form::open(['route' => ['cars.destroy', $car->id], 'method' => 'delete']) !!}
			<button type="submit" class="btn btn-danger">Obriši</button>
		{!! Form::close() !!}
	</div>
@stop