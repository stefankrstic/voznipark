@extends('app')

@section('content')
	<div class="container">
		<h1>Proizvođač</h1>
		
		<div class="form-group">
			<label>Naziv</label>
			<p class="form-control-static">{{ $manufacturer->name }}</p>
		</div>
	</div>
@stop