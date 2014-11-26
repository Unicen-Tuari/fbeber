<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 06:27:55
         compiled from "./templates/tabla_adminmod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72996883754754e3fc26276-26719850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d20b9232c10a3ad295dff9f7c5a4f4ea69765d' => 
    array (
      0 => './templates/tabla_adminmod.tpl',
      1 => 1416979622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72996883754754e3fc26276-26719850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54754e3fcf8510_34638785',
  'variables' => 
  array (
    'modelos' => 0,
    'modelo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54754e3fcf8510_34638785')) {function content_54754e3fcf8510_34638785($_smarty_tpl) {?><br>
	<h3>Modelos</h3>
	<button type="button" class="btn btn-primary glyphicon glyphicon-plus" onclick="location.href='./add/insertarModelos/index.php'">
		Agregar
	</button>
<br>
<br>

	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Imagen</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['modelo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modelo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modelos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modelo']->key => $_smarty_tpl->tpl_vars['modelo']->value){
$_smarty_tpl->tpl_vars['modelo']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['modelo']->value['id_modelo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['modelo']->value['nombre_modelo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['modelo']->value['img_modelo'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>