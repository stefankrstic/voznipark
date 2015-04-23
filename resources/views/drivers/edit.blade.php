@extends('app')

@section('content')
	<div class="container">
		<h1>Izmena modela</h1>
		
		{!! Form::model($driver, ['route' => ['drivers.update', $driver->id], 'method' => 'put']) !!}
		
			@include('partials.errors')

			<div class="form-group">
				<label>Ime</label>
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				<label>Email</label>
				{!! Form::text('email', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				<label>Broj vozačke</label>
				{!! Form::text('licence_number', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				<label>Vozilo</label>
				{!! Form::select('car_id', App\Car::lists('registration_number','id'), null, ['class' => 'form-control']) !!}
			</div>

			<button type="submit" class="btn btn-primary">Snimi</button>
		
		{!! Form::close() !!}

		<hr>

		{!! Form::open(['route' => ['drivers.destroy', $driver->id], 'method' => 'delete']) !!}
			<button type="submit" class="btn btn-danger">Obriši</button>
		{!! Form::close() !!}
	</div>
@stop