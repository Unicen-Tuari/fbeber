<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 11:29:46
         compiled from "./templates/pagdetallecol.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12986730595475ab9a5dcc63-75352979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e6cacfdf41d559c153bbc41302727aa0ef20910' => 
    array (
      0 => './templates/pagdetallecol.tpl',
      1 => 1416962850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12986730595475ab9a5dcc63-75352979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detallecol' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475ab9a7988d0_50941764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475ab9a7988d0_50941764')) {function content_5475ab9a7988d0_50941764($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title">Coleccion</h4>
</div>
<form class="text-left" method="POST" action="">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_coleccion" value="<?php echo $_smarty_tpl->tpl_vars['detallecol']->value['id_coleccion'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_coleccion" value="<?php echo $_smarty_tpl->tpl_vars['detallecol']->value['nombre_coleccion'];?>
" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control input-sm" type="text" name="img_col" value="<?php echo $_smarty_tpl->tpl_vars['detallecol']->value['img_coleccion'];?>
" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borracol" class="color btn col-lg-3 pull-left">eliminar</button>
			<button type="button" id="boton_modificacol" class="color btn col-lg-3 pull-right">editar</button>
		</div>
	</div>
</form><?php }} ?>