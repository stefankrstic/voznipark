@extends('app')

@section('content')
	<div class="container">
		<h1>Novi Servis</h1>

		@include('partials.errors')

		{!! Form::open(['url' => 'services', 'method' => 'post']) !!}
		
			<div class="form-group">
				<label>Naziv</label>
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				<label>Adresa</label>
				{!! Form::text('address', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				<label>Vozilo</label>
				{!! Form::select('car_id', App\Car::lists('registration_number','id'), null, ['class' => 'form-control']) !!}
			</div>

			<button type="submit" class="btn btn-primary">Snimi</button>
		
		{!! Form::close() !!}
	</div>
@stop