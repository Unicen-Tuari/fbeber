<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="">
		<title>Smartkin</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
	</head>

  	<div class="row">
		
			<nav class="navbar navbar-inverse" role="navigation">
	  			<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Icono Smartkin</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">   
				    	<ul class="nav navbar-nav navbar-right">
				        	<li><a href="./index.php">Inicio</a></li>
				        	<li><a href="./portfolio.php">Portfolio</a></li>
                         	<li class="dropdown">
                            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categor&iacute;as <span class="caret"></span></a>
                            	<ul class="dropdown-menu navbar-inverse" role="menu">
                              		{foreach $categorias as $nombre}
                                  	<li>
                                      <a onClick = "getDataColecciones({$nombre.id_categoria});">{$nombre.nombre_categoria}</a>
                                  	</li>
                              		{/foreach}
                            	</ul>
                          	</li>
                          	<li><a href="contacto.php">Contacto</a></li>
                      	</ul>
				    </div><!-- /.navbar-collapse -->
	  			</div><!-- /.container-fluid -->
			</nav>
			<div class="col-md-1">
				<button type="button" class="btn btn-success" onclick="location.href='./admin3/login.php'">Entrar!</button>
				<br><br>
				<button type="button" class="btn btn-success" onclick="location.href='./agregarUser.php'">Registrarse</button>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-8">
			
