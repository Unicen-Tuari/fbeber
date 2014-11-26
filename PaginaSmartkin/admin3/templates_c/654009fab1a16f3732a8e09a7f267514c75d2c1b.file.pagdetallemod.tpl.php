<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 12:50:33
         compiled from "./templates/pagdetallemod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3057786405475be8946f101-52534040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '654009fab1a16f3732a8e09a7f267514c75d2c1b' => 
    array (
      0 => './templates/pagdetallemod.tpl',
      1 => 1416976062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3057786405475be8946f101-52534040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detallemod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475be896f6af9_62318083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475be896f6af9_62318083')) {function content_5475be896f6af9_62318083($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title">Modelos</h4>
</div>
<form class="text-left" method="POST" action="">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_modelo" value="<?php echo $_smarty_tpl->tpl_vars['detallemod']->value['id_modelo'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_modelo" value="<?php echo $_smarty_tpl->tpl_vars['detallemod']->value['nombre_modelo'];?>
" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Imagen</span>
			<input class="form-control input-sm" type="text" name="img_mod" value="<?php echo $_smarty_tpl->tpl_vars['detallemod']->value['img_modelo'];?>
" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borramod" class="color btn col-lg-3 pull-left">Borrar</button>
		</div>
	</div>
</form><?php }} ?>