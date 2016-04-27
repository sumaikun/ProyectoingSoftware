<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">
	<link href="css/stylesPrin.css" rel="stylesheet" type="text/css" />
	<title>Social Navigation</title>

</head>

<body>

    <div id="login-form">

        <h1>Iniciar Sesi&oacute;n</h1>

        <fieldset>
                
            <form action="" method="get">

                <input type="text" required value="Usuario" onBlur="if(this.value=='')this.value='Usuario'" onFocus="if(this.value=='Usuario')this.value='' ">

                <input type="password" required value="Contraseña" onBlur="if(this.value=='')this.value='Contraseña'" onFocus="if(this.value=='Contraseña')this.value='' "> 

                <input type="submit" value="Entrar">
            </form>
        </fieldset>

    </div> 

</body>
</html>