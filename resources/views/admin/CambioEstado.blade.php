@extends('layouts.admin')
@section('content')




	     <!-- este formulario  es  para crear un usuario -->
	     	<tr></tr>
	     	<br>
		{!!Form::model($user,['route'=>['adminUs.update',$user->idusuario], 'method'=>'PUT'])!!}


			<div class="form-group">
				{!!Form::label('Estado')!!}
				{!!Form::select('estado',['1' => 'Activo', '2' => 'Inactivo', '3' => 'Mora' ],null,['id'=>'estado','class'=>'form-control'])!!}
			</div>
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}






@stop	