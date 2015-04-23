@extends('app')

@section('content')
	<div class="container">
		<h1>Novi Model</h1>

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		{!! Form::open(['url' => 'types', 'method' => 'post']) !!}
		
			<div class="form-group">
				<label>Naziv</label>
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				<label>Proizvodjac</label>
				{!! Form::select('manufacturer_id', App\Manufacturer::lists('name','id'), null, ['class' => 'form-control']) !!}
			</div>

			<button type="submit" class="btn btn-primary">Snimi</button>
		
		{!! Form::close() !!}
	</div>
@stop