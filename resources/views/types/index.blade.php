@extends('app')

@section('content')
	<div class="container">
		<h1>Svi Modeli</h1>

		<table class="table table-hover">
			<tr>
				<th>Naziv</th>
				<th>Proizvodjac</th>
				<th>Opcije</th>
			</tr>

			@foreach ($types as $type)
				<tr>
					<td>{{ $type->name }}</td>
					<td>{{ $type->manufacturer->name }}</td>

					<td>
						<div class="button-group btn-group-xs">
							<a class="btn btn-default" href="/types/{{ $type->id }}/edit">Edit</a>
							<a class="btn btn-default" href="/types/{{ $type->id }}">Show</a>
						</div>
					</td>
				</tr>
			@endforeach
		</table>

		<a href="/types/create" class="btn btn-primary">Novi</a>
	</div>
@stop