<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 04:43:57
         compiled from "./templates/tabla_admincli.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114303916954754c7d761093-99295800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45f3f3f4bb15d57a54007c789e2cabff0016f400' => 
    array (
      0 => './templates/tabla_admincli.tpl',
      1 => 1416913284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114303916954754c7d761093-99295800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'clientes' => 0,
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54754c7daa7205_86028534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54754c7daa7205_86028534')) {function content_54754c7daa7205_86028534($_smarty_tpl) {?><br>
	<h3>Usuarios</h3>

	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Mail</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['cliente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cliente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->key => $_smarty_tpl->tpl_vars['cliente']->value){
$_smarty_tpl->tpl_vars['cliente']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['id_usuario'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre_usuario'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['email'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>