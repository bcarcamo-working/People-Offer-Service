<div class="form-group">
		{!!Form::label('rut','Rut:')!!}
		{!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingresa el Rut'])!!}
	</div>
<div class="form-group">
		{!!Form::label('nombres','Nombres:')!!}
		{!!Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('apellidos','Apellidos:')!!}
		{!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('rol','rol:')!!}
		{!!Form::text('role_id',null,['class'=>'form-control','placeholder'=>'Ingresa el Rut'])!!}
	</div>