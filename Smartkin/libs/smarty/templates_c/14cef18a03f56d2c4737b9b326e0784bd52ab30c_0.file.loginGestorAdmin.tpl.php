<?php /* Smarty version 3.1.27, created on 2015-12-17 05:15:31
         compiled from "/opt/lampp/htdocs/lruggiero-master/templates/loginGestorAdmin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1844713934567236e3a81c46_76551491%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14cef18a03f56d2c4737b9b326e0784bd52ab30c' => 
    array (
      0 => '/opt/lampp/htdocs/lruggiero-master/templates/loginGestorAdmin.tpl',
      1 => 1450325729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844713934567236e3a81c46_76551491',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567236e3ae7d89_99619518',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567236e3ae7d89_99619518')) {
function content_567236e3ae7d89_99619518 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1844713934567236e3a81c46_76551491';
?>
<article>
	<h1>GESTOR DE ADMINISTRACION</h1>
	<section>
		<div class="page-header cabecera-seccion">
			<h2>Control de Usuario</h2>
		</div>
		<h3>Completa el Formulario Para Iniciar Sesion</h3>
		<div class="gestor-admin">
			<form id="form_login" class="form-horizontal" role="form">
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
						<input class="form-control" type="text" maxlength="40" id="name_admin" name="name_admin" placeholder="Usuario">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
						<input class="form-control" type="password" maxlength="40" id="pass_admin" name="pass_admin" placeholder="Password">
					</div>
				</div>
				<div id="contenedor-alertas-login" class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
					<!-- Alertas Login -->
				</div>
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
						<button type="submit" class="btn btn-success" id="acceder" >Acceder</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</article>
<!--//// JS DE MUSTACHE ////-->
	<?php echo '<script'; ?>
 type="text/javascript" src="libs/mustache/mustache.min.js"><?php echo '</script'; ?>
>
<!--//// JS DEL LOGIN ////-->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/login.js"><?php echo '</script'; ?>
><?php }
}
?>