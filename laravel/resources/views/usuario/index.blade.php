@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
	<table class="table">
		<thead>
			<th>Rut</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Correo</th>
			<th>Rol</th>
			<th>Fecha de creación</th>
			<th>Operacion</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<td>{{$user->rut}}</td>
				<td>{{$user->nombres}}</td>
				<td>{{$user->apellidos}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->role_id}}</td>
				<td>{{$user->created_at}}</td>
				<td>
					{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
		@endforeach
	</table>
	{!!$users->render()!!}
	@endsection