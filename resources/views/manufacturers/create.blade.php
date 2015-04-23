@extends('app')

@section('content')
	<div class="container">
		<h1>Novi proizvodjac</h1>

		@include('partials.errors')

		{!! Form::open(['url' => 'manufacturers', 'method' => 'post']) !!}
		
			<div class="form-group">
				<label>Naziv</label>
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>

			<button type="submit" class="btn btn-primary">Snimi</button>
		
		{!! Form::close() !!}
	</div>
@stop