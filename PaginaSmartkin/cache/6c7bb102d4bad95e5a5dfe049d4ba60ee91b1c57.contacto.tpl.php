<?php /*%%SmartyHeaderCode:4934119805475ea6b745073-06889994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7bb102d4bad95e5a5dfe049d4ba60ee91b1c57' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1417009277,
      2 => 'file',
    ),
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1416998697,
      2 => 'file',
    ),
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1416737659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4934119805475ea6b745073-06889994',
  'variables' => 
  array (
    'email' => 0,
    'direccion' => 0,
    'telefono' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475ea6ba50f29_68735185',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475ea6ba50f29_68735185')) {function content_5475ea6ba50f29_68735185($_smarty_tpl) {?><!DOCTYPE html>
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
                              		<br />
<b>Notice</b>:  Undefined index: categorias in <b>/opt/lampp/htdocs/PaginaSmartkin/templates_c/97c13ae6868bbc459509c9f1b968154acd23eecc.file.header.tpl.cache.php</b> on line <b>66</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/opt/lampp/htdocs/PaginaSmartkin/templates_c/97c13ae6868bbc459509c9f1b968154acd23eecc.file.header.tpl.cache.php</b> on line <b>66</b><br />
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
			

    
                  
    <h3>Detalle de Contacto</h3>
    <p>
            Correo Electr&oacute;nico: florenciadaianabeber@gmail.com
        <br>
        Direcci&oacute;n: calle falsa 123
        <br>
        Tel&eacute;fono: 303456
        <br>
                       
    </p> 

            
            <br>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51249.48241047209!2d-61.74474315!3d-36.60007755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95ea99d2a07a0eab%3A0x5de89f75bca3303!2sDaireaux%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1411760318756" width="600" height="450" frameborder="0" style="border:0"></iframe>

	<div class="footer">
		<p class="text-center">Programaci&oacute;n Web 2 | 2014</p>
    </div>

	</div><!--cierra la columna principal-->
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	


	    <script src="js/jquery-1.11.0.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/main.js"></script>
	
</html>

<?php }} ?>