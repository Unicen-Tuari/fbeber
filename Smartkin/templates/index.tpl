<!DOCTYPE html>
<html>
<head>
	<title>Smartkin</title>
	<link rel="shortcut icon" type="image/x-icon" href="./imagenes/images-sys/logo.ico"/>
<!--//// CDN PARA CSS DE BOOTSTRAP ////-->
	<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
<!--	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
<!--//// CSS PROPIO ////-->
	<link rel="stylesheet" type="text/css" href="css/default.css">
<!--//// CDN PARA JS DE JQUERY ////-->
	<script type="text/javascript" src="libs/jquery/jquery-1.11.3.min.js"></script>
<!--	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->
<!--//// CDN PARA JS DE BOOTSTRAP ////-->
	<script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
<!--	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
<!--//// JS DEL MENU ////-->
	<script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
	<div class="container-fluid text-center ">
		<div class="row logo">

			<img src="./imagenes/images-sys/smartkinlogo.png" width="40%">

		</div>
		<div class="row">

			<!-- BARRA DE NAVEGACION -->
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">

						<!-- BOTONES COLAPSADOS -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
						</div>
						<!-- FIN BOTONES COLAPSADOS -->

						<!-- BOTONES NORMALES -->
						<div class="collapse navbar-collapse text-center" id="myNavbar">
							<ul class="nav navbar-nav text-center">
								<li id="inicio" class="active"><a href="#">INICIO</a></li>
								<li id="colecciones"><a href="#">COLECCIONES</a></li>
								<li id="portfolios"><a href="#">PORTFOLIOS</a></li>
								<li id="contacto"><a href="#">CONTACTO</a></li>
							</ul>
						</div>
						<!-- FIN BOTONES NORMALES -->

					</div>
				</nav>
			</div>
			<!-- FIN BARRA DE NAVEGACION -->

		</div>
		<div class="row">

			<!-- CONTENEDOR PRINCIPAL -->
			<div id="contenedor-principal" class="col-xs-12 col-md-10 col-md-offset-1">
				
			</div>
			<!-- FIN CONTENEDOR PRINCIPAL -->

		</div>
		
	{include file="footer.tpl"}