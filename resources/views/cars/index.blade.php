@extends('app')

@section('content')
	<div class="container">
		<h1>Sva Vozila</h1>

		<table class="table table-hover">
			<tr>
				<th>Proizvodjac</th>
				<th>Model</th>
				<th>Boja</th>
				<th>Godina Proizvodnje</th>
				<th>Registacija</th>
				<th>Opcije</th>
			</tr>

			@foreach ($cars as $car)
				<tr>
					<td>{{ $car->type->manufacturer->name }}</td>
					<td>{{ $car->type->name }}</td>
					<td>{{ $car->color }}</td>
					<td>{{ $car->production_year }}</td>
					<td>{{ $car->registration_number }}</td>

					<td>
						<div class="button-group btn-group-xs">
							<a class="btn btn-default" href="/cars/{{ $car->id }}/edit">Edit</a>
							<a class="btn btn-default" href="/cars/{{ $car->id }}">Show</a>
						</div>
					</td>
				</tr>
			@endforeach
		</table>

		<a href="/cars/create" class="btn btn-primary">Novi</a>
	</div>
@stop