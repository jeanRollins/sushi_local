$('#exito').hide();
$('#error').hide();

$('#frmContacto').submit(function(e){
	const datosFormulario={
		correo: $('#correo').val(),
		nombre: $('#nombre').val(),
		asunto: $('#asunto').val(),
		sugerencia: $('#sugerencia').val()
	};
	$.post('contacto.php',datosFormulario,function(response){
		if (response==true){
			$('#exito').show();
		}else{
			$('#error').show();
		}
	});
	e.preventDefault();	
});