<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 05:47:22
         compiled from "./templates/pagdetallecat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297163556547552ca547e10-15889318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b77b6f20d7fff57d7a44a4a702c20dc5429d0c1' => 
    array (
      0 => './templates/pagdetallecat.tpl',
      1 => 1416975983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297163556547552ca547e10-15889318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547552ca74e135_39806211',
  'variables' => 
  array (
    'detallecat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547552ca74e135_39806211')) {function content_547552ca74e135_39806211($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title">Categoria</h4>
</div>
<form class="text-left" method="POST" action="" id="actualiza_cat">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_categoria" value="<?php echo $_smarty_tpl->tpl_vars['detallecat']->value['id_categoria'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_categoria" value="<?php echo $_smarty_tpl->tpl_vars['detallecat']->value['nombre_categoria'];?>
" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borracat" class="color btn col-lg-3 pull-left">Borrar</button>
		</div>
	</div>
</form><?php }} ?>