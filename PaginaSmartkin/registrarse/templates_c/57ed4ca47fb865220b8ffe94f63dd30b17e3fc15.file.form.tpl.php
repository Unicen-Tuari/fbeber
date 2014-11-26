<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 10:24:02
         compiled from "./templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10837323915471bf04c16f93-30043066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57ed4ca47fb865220b8ffe94f63dd30b17e3fc15' => 
    array (
      0 => './templates/form.tpl',
      1 => 1416907400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10837323915471bf04c16f93-30043066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5471bf04ccf8a6_48489336',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471bf04ccf8a6_48489336')) {function content_5471bf04ccf8a6_48489336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h1><a>Bienvenido!</a></h1>
	
	<form id="formComments" method="post" action="">
		<div class="form_description">
			<h2>Ingrese sus Datos:</h2>
		</div>	
		<div>	
			<label for="element_1">Nombre de usuario:</label>
			<input id="nombre_usuario" name= "nombre_usuario" maxlength="255" size="8" value=""/>
		</div>
		<div>
			<label for="element_1">Correo electronico:</label>
			<input id="email" name= "email" maxlength="255" size="14" value=""/>
		</div>			
		<div>
			<label for="element_1">Contraseña</label>
			<input id="contrasenia" name="contrasenia" class="element text medium" type="password" maxlength="255" value=""/> 
		</div> 
		<input id="saveForm" class="button_text" type="submit" name="saveForm" value="Finalizar!" />
	</form>	
		
		<h3>Bases y condiciones</h3>
		<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>