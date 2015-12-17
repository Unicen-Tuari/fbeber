<?php /* Smarty version 3.1.27, created on 2015-12-17 10:04:47
         compiled from "/opt/lampp/htdocs/Smartkin/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:159821292156727aafcd79b5_40449512%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdafd9fe30b5b4b8d2fc82dbdbe7b2f92956aada' => 
    array (
      0 => '/opt/lampp/htdocs/Smartkin/templates/index.tpl',
      1 => 1450343087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159821292156727aafcd79b5_40449512',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56727aafd545e5_80361763',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56727aafd545e5_80361763')) {
function content_56727aafd545e5_80361763 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '159821292156727aafcd79b5_40449512';
?>
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
	<?php echo '<script'; ?>
 type="text/javascript" src="libs/jquery/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
<!--	<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"><?php echo '</script'; ?>
> -->
<!--//// CDN PARA JS DE BOOTSTRAP ////-->
	<?php echo '<script'; ?>
 type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--	<?php echo '<script'; ?>
 type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
> -->
<!--//// JS DEL MENU ////-->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/menu.js"><?php echo '</script'; ?>
>
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
		
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>