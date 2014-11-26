<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 11:31:11
         compiled from "./templates/pagdetalleport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10462438685475abef843c53-16562090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32f69c0705f31e8065217b62f0287207248f1105' => 
    array (
      0 => './templates/pagdetalleport.tpl',
      1 => 1416976081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10462438685475abef843c53-16562090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detalleport' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475abef9966a4_00164908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475abef9966a4_00164908')) {function content_5475abef9966a4_00164908($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title">Portfolio</h4>
</div>
<form class="text-left" method="POST" action="">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_portfolio" value="<?php echo $_smarty_tpl->tpl_vars['detalleport']->value['id_portfolio'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_portfolio" value="<?php echo $_smarty_tpl->tpl_vars['detalleport']->value['nombre_portfolio'];?>
" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Imagen</span>
			<input class="form-control input-sm" type="text" name="img_port" value="<?php echo $_smarty_tpl->tpl_vars['detalleport']->value['img_portfolio'];?>
" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borraport" class="color btn col-lg-3 pull-left">Borrar</button>
		</div>
	</div>
</form><?php }} ?>