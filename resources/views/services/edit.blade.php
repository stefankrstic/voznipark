@extends('app')

@section('content')
	<div class="container">
		<h1>Izmena Servisa</h1>
		
		{!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'put']) !!}
		
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

		<hr>

		{!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
			<button type="submit" class="btn btn-danger">Obriši</button>
		{!! Form::close() !!}
	</div>
@stop