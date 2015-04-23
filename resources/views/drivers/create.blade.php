@extends('app')

@section('content')
	<div class="container">
		<h1>Novi Vozac</h1>

		@include('partials.errors')

		{!! Form::open(['url' => 'drivers', 'method' => 'post']) !!}
		
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
	</div>
@stop