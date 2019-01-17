<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php'; ?>
	
</head>
<style>
	.rrss:hover{
	color: blue;
	text-decoration: none;
}
</style>
<body>
	<div class="container containerFondo">
		<?php include 'header.php'; ?>
		<div class="row mt-4">
			<div class="col-xs-2 col-md-2 col-lg-2 col-xl-2"></div>
			<div class="col-xs-8 col-md-8 col-lg-8 col-xl-8">
				<h5 style="color:#fff;" class="mb-4">Sugerencias, encantados te ayudaremos :</h5>
				<p style="color:#fff;">Tambien te puedes comunicar en nuestras redes sociales: </p>
				<p> <a href="https://api.whatsapp.com/send?phone=56936785415" class="rrss"  >Whatsapp:&nbsp+569 36785415  </a></p>
				<p><a href="https://www.facebook.com/Abocados-sushi-delivery-2187724104846853/?referrer=whatsapp" class="rrss">Facebook:&nbspAbocados-sushi-delivery </a></p>
				<p> <a href="https://www.instagram.com/abocadosushimix/?r=nametag" class="rrss">Instagram:&nbsp@abocadosushimix</a></p>
				
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-md-2 col-lg-2 col-xl-2" style="background:#24292e; "></div>
			<div class="col-xs-10 col-md-8 col-lg-8 col-xl-8">
				<form id="frmContacto">
					<div class="form-group">
						<label for="asunto" style="color:#fff;">Ingresa Tu correo</label>
						<input type="mail" class="form-control" name="correo" id="correo" required>
					</div>
					<div class="form-group" >
						<label for="nombre" style="color:#fff;">Nombre</label>
						<input type="text" class="form-control" name="nombre" id="nombre" required>
					</div>
					<div class="form-group">
						<label for="asunto" style="color:#fff;">Asunto</label>
						<input type="text" class="form-control" name="asunto" id="asunto" required>
					</div>
					<div class="form-group">
						<label for="asunto" style="color:#fff;">Sugerencia</label>
						<textarea name="sugerencia" id="sugerencia" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-block" type="submit">Enviar Pregunta</button>
					</div>
					<div class="alert alert-success" role="alert" id="exito">
					  	Consulta enviada, te responderemos los mas rápido posible.
					</div>
					<div class="alert alert-danger" role="alert" id="error">
					  Error, verifica que tu datos sean correctos.
					</div>
				</form>	
			</div>
			<div class="col-2" style="background:#24292e; "></div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
	<?php include 'scripts.php'; ?>
</body>
</html>