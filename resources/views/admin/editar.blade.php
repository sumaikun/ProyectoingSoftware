@extends('layouts.admin')
	@section('content')
		@if(count($errors)>0)
			  <div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 	 <ul>
			  		@foreach($errors->all() as $error)
			  			<li>{!!$error!!}</li>
			  		@endforeach	
			  	 </ul>
   	         </div>
         @endif 
	     <!-- este formulario  es  para crear un usuario -->
	     	<tr></tr>
	     	<br>
		{!!Form::model($user,['route'=>['adminUs.update',$user->idusuario], 'method'=>'PUT'])!!}

				<div class="form-group">
				{!!Form::label('Nombre')!!}
				
				{!!Form::text('name',null,['disabled' => 'disabled','class'=>'form-control'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('Contraseña')!!}				
				{!!Form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'Ingrese la contraseña'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Correo')!!}
				{!!Form::email('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Ingresa su correo electronico'])!!}
			</div>
			<div class="form-group">
				<!--{!!Form::label('Rol')!!}
				{!!Form::select('rol',['1' => 'Administrador', '2' => 'Consultor', '3' => 'Director', '4' => 'Usuario Empresa'],null,['id'=>'rol','class'=>'form-control'])!!}-->
	            {!!Form::label('Rol')!!}
				{!!Form::select('rol',$roles,null,['id'=>'rol','class'=>'form-control'])!!}
			</div>
				{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!} 
				
		{!!Form::close()!!}


	@stop