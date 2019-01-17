<?php 

if (isset($_POST['correo']) && isset($_POST['asunto']) && isset($_POST['sugerencia']) && isset($_POST['nombre'])){
	$correo=$_POST['correo'];
	$asunto=$_POST['asunto'];
	$sugerencia=$_POST['sugerencia'];
	$nombre=$_POST['nombre'];

	$correo=filter_var($correo, FILTER_SANITIZE_STRING);
	$asunto=filter_var($asunto, FILTER_SANITIZE_STRING);
	$sugerencia=filter_var($sugerencia, FILTER_SANITIZE_STRING);
	$nombre=filter_var($nombre, FILTER_SANITIZE_STRING);	

	//$destinatario="nafre.jean@gmail.com";
	$destinatario="contacto.abocados@gmail.com";
	$asuntoCorreo="Contacto Cliente Abocados-Sushi";

	$carta="De: $nombre \n";
	$carta.="Correo: $correo \n";
	$carta.="Asunto: $asunto \n";
	$carta.="Sugerencia: $sugerencia \n";

	if (mail($destinatario, $asunto, $carta)){
		echo true;
	}else{
		echo false;
	}
}else{
	echo false;
}


 ?>