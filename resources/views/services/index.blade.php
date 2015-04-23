@extends('app')

@section('content')
	<div class="container">
		<h1>Svi Servisi</h1>

		<table class="table table-hover">
			<tr>
				<th>Naziv</th>
				<th>Adresa</th>
				<th>Opcije</th>
			</tr>

			@foreach ($services as $service)
				<tr>
					<td>{{ $service->name }}</td>
					<td>{{ $service->address }}</td>

					<td>
						<div class="button-group btn-group-xs">
							<a class="btn btn-default" href="/services/{{ $service->id }}/edit">Edit</a>
							<a class="btn btn-default" href="/services/{{ $service->id }}">Show</a>
						</div>
					</td>
				</tr>
			@endforeach
		</table>

		<a href="/services/create" class="btn btn-primary">Novi</a>
	</div>
@stop