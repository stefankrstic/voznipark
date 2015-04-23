@extends('app')

@section('content')
	<div class="container">
		<h1>Novo Vozilo</h1>

		@include('partials.errors')

		{!! Form::open(['url' => 'cars', 'method' => 'post']) !!}
		
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
			<button car="submit" class="btn btn-primary">Snimi</button>
		
		{!! Form::close() !!}
	</div>
@stop