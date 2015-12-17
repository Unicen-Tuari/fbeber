<?php /* Smarty version 3.1.27, created on 2015-12-17 04:12:04
         compiled from "/opt/lampp/htdocs/lruggiero-master/templates/contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1858821302567228049f4400_77991300%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28bddb8786dd2f8ac7af24d4367f12e2f45b87ea' => 
    array (
      0 => '/opt/lampp/htdocs/lruggiero-master/templates/contacto.tpl',
      1 => 1450321921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858821302567228049f4400_77991300',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56722804a609a5_03909573',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56722804a609a5_03909573')) {
function content_56722804a609a5_03909573 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1858821302567228049f4400_77991300';
?>
<article>
	<h1>CONTACTO</h1>
	<section>
		<div class="page-header cabecera-seccion">
			<h2>Formulario de Contacto</h2>
		</div>
		<h3>Dejanos tu inquietud y con gusto responderemos a la brevedad.</h3>
		<div class="contacto">
			<form id="form_contacto" class="form-horizontal" role="form">
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
						<h6>* Campos Obligatorios</h6>
						<input class="form-control" type="text" maxlength="100" id="nombre" name="nombre" placeholder="* Nombre Real">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
						<input class="form-control" type="email" maxlength="100" id="email" name="email" placeholder="* Direccion de E-Mail">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
						<textarea class="form-control" maxlength="1000" rows="8" id="consulta" name="consulta" placeholder="* Texto de la Consulta (Minimo 50 Caracteres)"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
						<button type="reset" class="btn btn-danger">Limpiar</button>
						<button type="submit" class="btn btn-success" id="enviarConsulta" >Enviar Consulta</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</article>
<!--//// JS DE CONTACTO ////-->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/contacto.js"><?php echo '</script'; ?>
><?php }
}
?>