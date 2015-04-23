@extends('app')

@section('content')
	<div class="container">
		<h1>Svi proizvodjaci</h1>

		<table class="table table-hover">
			<tr>
				<th>Naziv</th>
				<th>Opcije</th>
			</tr>

			@foreach ($manufacturers as $manufacturer)
				<tr>
					<td>{{ $manufacturer->name }}</td>
					<td>
						<div class="button-group btn-group-xs">
							<a class="btn btn-default" href="/manufacturers/{{ $manufacturer->id }}/edit">Edit</a>
							<a class="btn btn-default" href="/manufacturers/{{ $manufacturer->id }}">Show</a>
						</div>
					</td>
				</tr>
			@endforeach
		</table>

		<a href="/manufacturers/create" class="btn btn-primary">Novi</a>
	</div>
@stop