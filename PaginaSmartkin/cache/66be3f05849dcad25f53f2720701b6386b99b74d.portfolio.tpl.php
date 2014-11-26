<?php /*%%SmartyHeaderCode:6968858515475ea5ac865f0-65015756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66be3f05849dcad25f53f2720701b6386b99b74d' => 
    array (
      0 => './templates/portfolio.tpl',
      1 => 1417009677,
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
  'nocache_hash' => '6968858515475ea5ac865f0-65015756',
  'variables' => 
  array (
    'nombre_portfolio' => 0,
    'img_portfolio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475ea5ad9bba1_18500872',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475ea5ad9bba1_18500872')) {function content_5475ea5ad9bba1_18500872($_smarty_tpl) {?><!DOCTYPE html>
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
			

    
  
    <h3>Portfolio</h3>
    <p> 
            <img src="./images/portfolio/997086_1498850657040652_3118774525285938379_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/1654015_1498391637086554_466836962507869545_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/1908450_1498850673707317_3791479265387641777_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/10389121_1498850760373975_8333579496250483844_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/10423697_1498850730373978_2142514428267983601_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/10492066_1498850697040648_7200859971183734856_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/10502430_1498392667086451_3756264097670901404_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/10612911_1498391613753223_7028282914866229629_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/10632622_1498391667086551_7567106657853704584_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/10636082_1505591559699895_3826072495000119652_n.jpg" width="200px" height="200px">
            <img src="./images/portfolio/10671419_1498391683753216_6607660977077619213_n.jpg" width="200px" height="200px">
      
    </p>



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