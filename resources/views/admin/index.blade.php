@extends('layouts.admin')
	
<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Usuario creado exitosamente</strong>  
</div>
@endif
@if($message == 'update')
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Usuario Actualizado exitosamente</strong>  
</div>
@endif


	@section('content')

  	<section class="content-header">
	<h4> <i class="fa fa-list-ul"></i> Listado de usuarios </h4>
	<ol class="breadcrumb">
	<div class="table-responsive ocultar_400px">
     <table class ="table">
     		<thead>
     		    <th> Nombre  </th>
     		
                <th> correo </th>

                <th>rol </th>
     		 </thead>
     		 @foreach($users as $user)
     		 <tbody>
     		 	<td> {{$user->name}}  </td>
     		
     		 	<td> {{$user->email}}  </td>
     	            
     		 	<?php
     		 	$tipoRol;
     		 	switch ($user->idrol)
     		 	{
     		 		case 1: 
     		 			$tipoRol = "Administrador";
     		 		break;
     		 		case 2:
     		 			$tipoRol = "profesor";
     		 		break;
     		 		case 3:
     		 			$tipoRol = "estudiante";
     		 		break;
                    default:
                        $tipoRol = "estudiante";


     		 	}
     		 	echo '<td>'.$tipoRol.'</td>';
     		 	?>
     		 	<td>
     		 	{!!link_to_route('adminUs.edit', $title = 'Editar' , $parameters = $user->id, $attributes = ['class'=> 'btn btn-warning'])!!}
     		 	</td>
     	        <!--<td>
                  <button type="button" class="btn btn-warning">Editar</button>  
                </td>-->
     		 </tbody>
     		 @endforeach
     	</table> 









@stop	