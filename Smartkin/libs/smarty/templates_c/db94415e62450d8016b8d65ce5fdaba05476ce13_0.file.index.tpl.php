<?php /* Smarty version 3.1.27, created on 2015-12-17 03:01:50
         compiled from "/opt/lampp/htdocs/lruggiero-master/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8490646855672178e1f7de6_19522061%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db94415e62450d8016b8d65ce5fdaba05476ce13' => 
    array (
      0 => '/opt/lampp/htdocs/lruggiero-master/templates/index.tpl',
      1 => 1450317709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8490646855672178e1f7de6_19522061',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5672178e268683_15441285',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5672178e268683_15441285')) {
function content_5672178e268683_15441285 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8490646855672178e1f7de6_19522061';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smartkin</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/imagenes/favicon.ico"/>
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
	<div class="container-fluid">
		<div class="row">

			<h1>aca va la imagen del logo</h1>

		</div>
		<div class="row">

			<!-- BARRA DE NAVEGACION -->
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<nav class="navbar navbar-inverse menu">
					<div class="container-fluid">

						<!-- BOTONES COLAPSADOS -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle menu-resumen" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand navbar-toggle menu-home" data-toggle="collapse" href="/">ARK TANDIL</a>
						</div>
						<!-- FIN BOTONES COLAPSADOS -->

						<!-- BOTONES NORMALES -->
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav nav-justified menu-botonera">
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
				<!-- ESTE CONTENEDOR SERA
					 LLENADO DESDE JS CON
					 LA SECCION CORRECTA
					 A MEDIDA QUE EL USUARIO
					 VAYA NAVEGANDO POR EL SITIO -->
			</div>
			<!-- FIN CONTENEDOR PRINCIPAL -->

		</div>
		<div class="row">
			<!-- FOOTER -->
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<footer class="pie-pagina">
					<button class="btn btn-primary boton-admin" id="gestor-admin">Admin</button>
					<p><span class="glyphicon glyphicon-copyright-mark"></span> 2015 TUPAR</p>
				</footer>
			</div>
			<!-- FIN FOOTER -->

		</div> 
	</div>
</body>
</html><?php }
}
?>