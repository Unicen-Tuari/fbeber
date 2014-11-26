<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 12:44:40
         compiled from "./templates/pagdetalleuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10885564705475bd28406285-79111169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1ac4249c45413599b38971f40085c5953d47195' => 
    array (
      0 => './templates/pagdetalleuser.tpl',
      1 => 1416975821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10885564705475bd28406285-79111169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detalleuser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475bd2852ea25_13705631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475bd2852ea25_13705631')) {function content_5475bd2852ea25_13705631($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title">Usuarios</h4>
</div>
<form class="text-left" method="POST" action="">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['detalleuser']->value['id_usuario'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_usuario" value="<?php echo $_smarty_tpl->tpl_vars['detalleuser']->value['nombre_usuario'];?>
" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control input-sm" type="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['detalleuser']->value['email'];?>
" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borrauser" class="color btn col-lg-3 pull-left">Borrar</button>
		</div>
	</div>
</form><?php }} ?>