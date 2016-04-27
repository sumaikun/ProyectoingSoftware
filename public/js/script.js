$("#registro").click(function(){
	var nombre= $("#nombre").val();
	//var usuario= $("#usuario").val();
	//var contrasena= $("#contrasena").val();
	//var correo= $("#correo").val();
	//var rol= $("#rol").val();
	var ruta= "htttp://localhost:8000/adminUs";

	alert(nombre);

	$.ajax({
		url: ruta,
		type: 'POST',
		dataType: 'json',
		data: {nombre: nombre}
	});

});