<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php'; ?>
</head>
<body>
	
	<div class="container">
		<?php include 'header.php'; ?>
		<div class="main">
			<div class="row mt-3">
				<div class="col-sm-5 col-md-4 col-lg-3 col-xl-3">
					<div class="card mb-4">
						<div class="card-header">
							<h6>Delivery de Sushi para las siguientes comunas: </h6>
						</div>
						<div class="card-body">
							<a href="#" class="comunas"> <span>#La Florida &nbsp </span></a>
							<a href="#" class="comunas"> <span>&nbsp #Puente Alto &nbsp</span></a>	
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<h6>Carta: </h6>
						</div>
						<div class="card-body">
							<nav class="nav flex-column">
								<a href="platos_calientes.php" class="nav-link"><strong>Platos Calientes</strong></a>
								<a href="hosomaki.php" class="nav-link"><strong>Hosomaki</strong></a>
								<a href="hot_rolls.php" class="nav-link"><strong>Hot Rolls</strong></a>
								<a href="california_hot_rolls.php" class="nav-link"><strong>California Rolls</strong></a>
								<a href="especial_rolls.php" class="nav-link"><strong>Especial Rolls</strong></a>
								<a href="cheese_rolls.php" class="nav-link"><strong>Cheese Rolls</strong></a>
								<a href="acevichados.php" class="nav-link"><strong>Acevichados Rolls</strong></a>
								<a href="niguiri.php" class="nav-link"><strong>Niguiri</strong></a>
							</nav>
						</div>
					</div>
				</div>			
				<div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 my-2">
					<div class="carousel slide" id="principal-carousel" data-ride="carousel" >
						<ol class="carousel-indicators">
							<li data-target="#principal-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#principal-carousel" data-slide-to="1"></li>
							<li data-target="#principal-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="../img/sushi1.jpeg" style="border-radius: 12px;" class="img-fluid" >
							</div>
							<div class="carousel-item">
								<img src="../img/sushi3_slide2.jpeg" style="border-radius: 12px;" class="img-fluid" >
							</div>
							<div class="carousel-item">
								<img src="../img/sushi3.jpeg" style="border-radius: 12px;" class="img-fluid" >
							</div>
						</div>

						<a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Anterior</span>
						</a>

						<a href="#principal-carousel" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Siguiente</span>
						</a>
					</div>
					<div class="carousel slide mt-4 d-block d-xs-none d-sm-none d-md-block d-lg-none d-xl-none" id="carousel2" data-ride="carousel"  >
						<ol class="carousel-indicators">
							<li data-target="#carousel2" data-slide-to="0" class="active"></li>
							<li data-target="#carousel2" data-slide-to="1"></li>
							<li data-target="#carousel2" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="../img/sushi1_slide2.jpeg" style="border-radius: 12px;" class="img-fluid" >
							</div>
							<div class="carousel-item">
								<img src="../img/sushi2_slide2.jpeg" style="border-radius: 12px;" class="img-fluid" >
							</div>
							<div class="carousel-item">
								<img src="../img/sushi3_slide2.jpeg" style="border-radius: 12px;" class="img-fluid" >
							</div>
						</div>

						<a href="#carousel2" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Anterior</span>
						</a>

						<a href="#carousel2" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Siguiente</span>
						</a>
					</div>
				</div>
			</div>
			<div class="row widget justify-content-between"> 
				<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 my-3">
					<div class="card">
						<img src="../img/promo1.jpeg" alt="" class="card-img-top img-responsive" style="border-top-left-radius: 12px;
						border-top-right-radius: 12px;"  width="100" height="180">
						<div class="card-body">
							<h6 class="card-title">Promocion 30 piezas &nbsp &nbsp <strong>  $8.000</strong></h6>
							<p class="card-text">
								-10 Pollo, queso crema, cebollín en panko.
								<p>
								-10 Pollo, palta, cebollín envuelto en sesamo.
								</p>
								<div id="promo30" class="promo30">
									<p>-10 Camarón tempura, queso crema, cebollin envuelto en palta.</p>
								</div>
							</p>
							<button class="btn btn-primary btn-block" id="btnPromo30" onclick="showPromo30()">Ver Promocion</button>
						</div>
					</div>
				</div>		
				<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 my-3">
					<div class="card">
						<img src="../img/promo2.jpeg" alt="" class="card-img-top img-responsive" style="border-top-left-radius: 12px;
						border-top-right-radius: 12px;" width="100" height="180">
						<div class="card-body">
							<h6 class="card-title">Promocion 40 piezas <strong>&nbsp &nbsp  $9.000</strong></h6>
							<p class="card-text">
								-10 Pollo, cebollin, queso crema en Panko.
								<p>-10 Champiñon, cebollin , queso crema en tempura.</p>
								<div class="promo40" id="promo40">
									<p>-10 Kanikama, cebollin, queso crema en palta.</p>
									<p>-10 Palmito, queso crema, cebollin en sesamo.</p>	
								</div>	
							</p>
							<button class="btn btn-primary btn-block" id="btnPromo40" onclick="showPromo40()">Ver Promocion</button>
						</div>
					</div>
				</div>		
				<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 my-3">
					<div class="card">
						<img src="../img/promo3.jpeg" alt="" class="card-img-top img-responsive" style="border-top-left-radius: 12px;
						border-top-right-radius: 12px;" width="100" height="180">
						<div class="card-body">
							<h6 class="card-title">Promocion 50 Mixtas <strong> &nbsp &nbsp $11.000</strong></h6>
							<p class="card-text">
								-10 Pollo, queso crema cebollín, en Panko.
								<p>-10 Champiñón, queso crema cebollín en tempura.</p>
								<div class="promo50Mixtas">
									<p>-10 Kanikama , palta, cebollin en queso crema.</p>
									<p>-10 Camarón , queso crema, cebollín en palta .</p>
									<p>-10 Palmito, cebollin, queso crema en sesamo.</p>	
								</div>
							</p>
							<button class="btn btn-primary btn-block" id="btnPromo50Mixtas" onclick="showPromo50Mixtas()">Ver Promocion</button>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 my-3">
					<div class="card">
						<img src="../img/promo_50_frita.jpg" alt="" class="card-img-top img-responsive" style="border-top-left-radius: 12px;
						border-top-right-radius: 12px;" width="100" height="180">
						<div class="card-body">
							<h6 class="card-title">Promocion 50 fritas<strong>&nbsp &nbsp  $11.900</strong></h6>
							<p class="card-text">
								-10 Salmón, queso crema, cebollin en tempura.
								<p>-10 Kanikama, cebollin, queso crema en tempura.</p>
								<div class="promo50Fritas">	
									<p>-10 Pollo, queso crema, cebollin en Panko.</p>
									<p>-10 Champiñón, queso crema, cebollin en Panko.</p>
									<p>-10 Kalamar, queso crema, cebollin en panko.</p>
								</div>                                         
							</p>
							<button class="btn btn-primary btn-block" id="btnPromo50Fritas" onclick="showPromo50Fritas()">Ver Promocion</button>
						</div>
					</div>
				</div>		
				<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 my-3">
					<div class="card">
						<img src="../img/promo4.jpeg" alt="" class="card-img-top img-responsive" style="border-top-left-radius: 12px;
						border-top-right-radius: 12px;" width="100" height="180">
						<div class="card-body">
							<h6 class="card-title">Promocion 70 piezas<strong>&nbsp &nbsp  $13.900</strong></h6>
							<p class="card-text">
								-10 Pollo, queso crema, cebollín en Panko.

								<p>-10 Champiñón, queso crema, cebollín en Panko.</p>

								<div class="promo70">
									<p>-10 Kanikama, cebollín, queso crema en tempura.</p>

									<p>-10 Camaron, queso crema, cebollín en palta.</p>

									<p>-10 Pollo, palta, cebollín en queso crema.</p>

									<p>-10 Kanikama, queso crema, cebollín en cibullet. </p>

									<p>-10 Palmito, aceituna, queso crema, cebollín en sesamo.</p>
								</div>	 
							</p>
							<button class="btn btn-primary btn-block" id="btnPromo70" onclick="showPromo70()">Ver Promocion</button>
						</div>
					</div>
				</div>		
				<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 my-3">
					<div class="card">
						<img src="../img/promo5.jpeg" alt="" class="card-img-top img-responsive" style="border-top-left-radius: 12px;
						border-top-right-radius: 12px;" width="100" height="180">
						<div class="card-body">
							<h6 class="card-title">Promocion 100 piezas<strong>&nbsp &nbsp  $18.000</strong></h6>
							<p class="card-text">
								-10 Pollo, queso crema, cebollín en Panko.
								<p>-10 Champiñón, queso crema, cebollín en Panko.</p>
							<div class="promo100">
								<p>-10 Camarón, queso crema, cebollín en </p>
								<p>-10 Kanikama, queso crema, cebollín en tempura. </p>
								<p>-10 Palmito, queso crema, cebollín en tempura. </p>
								<p>-10 Pollo, palta, cebollín en queso crema. </p>
								<p>-10 Camarón, queso crema, cebollín en palta. </p>
								<p>-10 Salmón, queso crema, cebollín en palta. </p>
								<p>-10 Kanikama, queso crema, cebollín en sesamo. </p>
								<p>-10 Palmito, queso crema, cebollín en cibullet. </p>
							</div>
							</p>
							<button class="btn btn-primary btn-block" id="btnPromo100" onclick="showPromo100()">Ver Promocion</button>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
	<?php include 'scripts.php'; ?>
</body>
</html>

<script> 
	//Inicio Promo 30
	$(".promo30").hide();

	function showPromo30(){
		let text="";

		if($("#btnPromo30").text()=="Ver Promocion"){
			$(".promo30").show();
			text ="Ocultar Promocion";
		}else{
			$(".promo30").hide();
			text="Ver Promocion";
		}
		$("#btnPromo30").html(text);
	}

	//Fin  Promo 30

	//Inicio Promo 40
	$(".promo40").hide();

	function showPromo40(){
		let text="";

		if($("#btnPromo40").text()=="Ver Promocion"){
			$(".promo40").show();
			text ="Ocultar Promocion";
		}else{
			$(".promo40").hide();
			text="Ver Promocion";
		}
		$("#btnPromo40").html(text);
	}

	//Fin  Promo 40

	//Inicio Promo 50 Mixtas
	$(".promo50Mixtas").hide();

	function showPromo50Mixtas(){
		let text="";

		if($("#btnPromo50Mixtas").text()=="Ver Promocion"){
			$(".promo50Mixtas").show();
			text ="Ocultar Promocion";
		}else{
			$(".promo50Mixtas").hide();
			text="Ver Promocion";
		}
		$("#btnPromo50Mixtas").html(text);
	}
	//Fin  Promo 50 Mixtas

	//Inicio Promo 50 Mixtas
	$(".promo50Fritas").hide();

	function showPromo50Fritas(){
		let text="";

		if($("#btnPromo50Fritas").text()=="Ver Promocion"){
			$(".promo50Fritas").show();
			text ="Ocultar Promocion";
		}else{
			$(".promo50Fritas").hide();
			text="Ver Promocion";
		}
		$("#btnPromo50Fritas").html(text);
	}
	//Fin  Promo 50 Mixtas

	//Inicio Promo 70
	$(".promo70").hide();

	function showPromo70(){
		let text="";

		if($("#btnPromo70").text()=="Ver Promocion"){
			$(".promo70").show();
			text ="Ocultar Promocion";
		}else{
			$(".promo70").hide();
			text="Ver Promocion";
		}
		$("#btnPromo70").html(text);
	}
	//Fin  Promo 70 

		//Inicio Promo 100
	$(".promo100").hide();

	function showPromo100(){
		let text="";

		if($("#btnPromo100").text()=="Ver Promocion"){
			$(".promo100").show();
			text ="Ocultar Promocion";
		}else{
			$(".promo100").hide();
			text="Ver Promocion";
		}
		$("#btnPromo100").html(text);
	}
	//Fin  Promo 100
</script>