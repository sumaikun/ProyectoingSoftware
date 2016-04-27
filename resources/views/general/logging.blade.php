<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">
	<link href="css/stylesPrin.css" rel="stylesheet" type="text/css" />
    
	<title>Social Navigation</title>

</head>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
<body>
    <div>
    <?php $message=Session::get('message')?>

    @if($message == 'store')
    <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Datos incorrectos</strong>  
    </div>
    @endif

    </div>

    <div id="login-form">

        <h1>Iniciar Sesi&oacute;n</h1>

        <fieldset>
        {!!Form::open(['route'=>'Login.store','method'=>'POST'])!!}
           <!-- <form action="" method="get"> -->
           <!-- <div class="form-group">
                {!!Form::label('Correo')!!}
                {!!Form::email('correo',null,['id'=>'correo','class'=>'form-control','placeholder'=>'Ingresa su correo electronico'])!!}
            </div>-->
            <div class="form-group">
                {!!Form::label('Nombre')!!}
                {!!Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Contraseña')!!}             
                {!!Form::password('contrasena',['id'=>'contrasena','class'=>'form-control','placeholder'=>'Ingrese la contraseña'])!!}
            </div>

        {!!Form::submit('Login',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
                <!--<input type="text" required value="Usuario" onBlur="if(this.value=='')this.value='Usuario'" onFocus="if(this.value=='Usuario')this.value='' ">

                <input type="password" required value="Contraseña" onBlur="if(this.value=='')this.value='Contraseña'" onFocus="if(this.value=='Contraseña')this.value='' "> 

                <input type="submit" value="Entrar">
            </form> -->
        </fieldset>

    </div> 

</body>
</html>