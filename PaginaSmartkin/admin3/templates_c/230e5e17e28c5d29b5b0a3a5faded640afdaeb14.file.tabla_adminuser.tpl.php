<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 10:29:34
         compiled from "./templates/tabla_adminuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11433389915475563a44b4c0-63046175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230e5e17e28c5d29b5b0a3a5faded640afdaeb14' => 
    array (
      0 => './templates/tabla_adminuser.tpl',
      1 => 1416979547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11433389915475563a44b4c0-63046175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475563a58fcc4_65633577',
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475563a58fcc4_65633577')) {function content_5475563a58fcc4_65633577($_smarty_tpl) {?><br>
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
			<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre_usuario'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>