@extends('app')

@section('content')
	<div class="container">
		<h1>Izmena modela</h1>
		
		{!! Form::model($type, ['route' => ['types.update', $type->id], 'method' => 'put']) !!}
		
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

		<hr>

		{!! Form::open(['route' => ['types.destroy', $type->id], 'method' => 'delete']) !!}
			<button type="submit" class="btn btn-danger">Obriši</button>
		{!! Form::close() !!}
	</div>
@stop