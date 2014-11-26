<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 06:27:53
         compiled from "./templates/tabla_adminport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49348865054754f919acb70-62032396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e53e744a23ec317e387eff3244f760a53741e61' => 
    array (
      0 => './templates/tabla_adminport.tpl',
      1 => 1416979563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49348865054754f919acb70-62032396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54754f91a720f3_32261381',
  'variables' => 
  array (
    'portfolios' => 0,
    'portfolio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54754f91a720f3_32261381')) {function content_54754f91a720f3_32261381($_smarty_tpl) {?><br>
	<h3>Portfolios</h3>
	<button type="button" class="btn btn-primary glyphicon glyphicon-plus"  onclick="location.href='./add/insertarPortfolios/index.php'">
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
			<?php  $_smarty_tpl->tpl_vars['portfolio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['portfolio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['portfolio']->key => $_smarty_tpl->tpl_vars['portfolio']->value){
$_smarty_tpl->tpl_vars['portfolio']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_portfolio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['portfolio']->value['nombre_portfolio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['portfolio']->value['img_portfolio'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>