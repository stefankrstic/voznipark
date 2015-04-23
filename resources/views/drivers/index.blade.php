@extends('app')

@section('content')
	<div class="container">
		<h1>Svi Vozači</h1>

		<table class="table table-hover">
			<tr>
				<th>Ime</th>
				<th>Email</th>
				<th>Broj vozačke dozvole</th>
				<th>Opcije</th>
			</tr>

			@foreach ($drivers as $driver)
				<tr>
					<td>{{ $driver->name }}</td>
					<td>{{ $driver->email }}</td>
					<td>{{ $driver->licence_number }}</td>

					<td>
						<div class="button-group btn-group-xs">
							<a class="btn btn-default" href="/drivers/{{ $driver->id }}/edit">Edit</a>
							<a class="btn btn-default" href="/drivers/{{ $driver->id }}">Show</a>
						</div>
					</td>
				</tr>
			@endforeach
		</table>

		<a href="/drivers/create" class="btn btn-primary">Novi</a>
	</div>
@stop