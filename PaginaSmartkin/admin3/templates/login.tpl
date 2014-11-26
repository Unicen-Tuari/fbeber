<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smartkin</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/admin.css" rel="stylesheet" media="screen">	
</head>
<body>
	<div class="container">
	<img src="../images/smartkinlogo.png" width="100%">
		<form class="col-lg-4 col-lg-offset-4" method="POST" id="form_login" action="">
			<br></br>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-user"></span>
				<input type="text" name="username" placeholder="Usuario" class="form-control" autofocus required>
			</div>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-lock"></span>
				<input type="password" name="contrasenia" placeholder="Contraseña" class="form-control" required>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-block"><span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</form>
	</div> 
	<a href="../index.php">Ir al sitio</a>
	<script type="text/javascript" src="../js/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/admin.js"></script>
</body>
</html>