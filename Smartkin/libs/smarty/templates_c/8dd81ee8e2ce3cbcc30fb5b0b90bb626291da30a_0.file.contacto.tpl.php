<?php /* Smarty version 3.1.27, created on 2015-12-17 10:12:30
         compiled from "/opt/lampp/htdocs/Smartkin/templates/contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:59164863956727c7e3daed8_81992735%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dd81ee8e2ce3cbcc30fb5b0b90bb626291da30a' => 
    array (
      0 => '/opt/lampp/htdocs/Smartkin/templates/contacto.tpl',
      1 => 1450343547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59164863956727c7e3daed8_81992735',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56727c7e442095_18090655',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56727c7e442095_18090655')) {
function content_56727c7e442095_18090655 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '59164863956727c7e3daed8_81992735';
?>
<article>
	<section>
		<div class="page-header cabecera-seccion">
		</div>
		<div class="contacto">
			<form id="form_contacto" class="form-horizontal" role="form">
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
						<h4>Envianos tu consulta..</h4>
						<h6>* Campos Obligatorios</h6>
						<input class="form-control" type="text" maxlength="100" id="nombre" name="nombre" placeholder="* Nombre">
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