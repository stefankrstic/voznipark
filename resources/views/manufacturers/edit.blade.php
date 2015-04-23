@extends('app')

@section('content')
	<div class="container">
		<h1>Izmena proizvodjaca</h1>
		
		@include('partials.errors')

		{!! Form::model($manufacturer, ['route' => ['manufacturers.update', $manufacturer->id], 'method' => 'put']) !!}
		
			<div class="form-group">
				<label>Naziv</label>
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>

			<button type="submit" class="btn btn-primary">Snimi</button>
		
		{!! Form::close() !!}

		<hr>

		{!! Form::open(['route' => ['manufacturers.destroy', $manufacturer->id], 'method' => 'delete']) !!}
			<button type="submit" class="btn btn-danger">Obriši</button>
		{!! Form::close() !!}
	</div>
@stop