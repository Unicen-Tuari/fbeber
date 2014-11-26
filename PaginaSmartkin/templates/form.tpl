<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smartkin</title>
	<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="./css/admin.css" rel="stylesheet" media="screen">	
</head>
<body>
	<div class="container">
	<img src="./images/smartkinlogo.png" width="100%">
	
	<form id="formComments" method="post" action="">
		<div class="form_description">
			<h2>Ingrese sus Datos:</h2>
		</div>	
		<div>	
			<label for="element_1">Nombre de usuario:</label>
			<input id="nombre_usuario" name= "nombre_usuario" maxlength="255" size="20" value=""/>
		</div>
		<div>
			<label for="element_1">Correo electronico:</label>
			<input id="email" name= "email" maxlength="255" size="20" value=""/>
		</div>			
		<div>
			<label for="element_1">Contraseña</label>
			<input id="contrasenia" name="contrasenia" class="element text medium" type="password" size="20" maxlength="255" value=""/> 
		</div> 
		<input id="saveForm" class="button_text" type="submit" name="saveForm" value="Finalizar!" />
	</form>	
		
		<h3>Bases y condiciones</h3>
		<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
</div> 
	<a href="./index.php">Ir al sitio</a>
	<script type="text/javascript" src="./js/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>
</html>