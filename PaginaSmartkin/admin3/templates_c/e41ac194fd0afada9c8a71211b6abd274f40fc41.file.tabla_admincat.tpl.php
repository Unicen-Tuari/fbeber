<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 06:27:51
         compiled from "./templates/tabla_admincat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1387418087547552c78808a2-75134785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e41ac194fd0afada9c8a71211b6abd274f40fc41' => 
    array (
      0 => './templates/tabla_admincat.tpl',
      1 => 1416979589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1387418087547552c78808a2-75134785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547552c7993a01_70330951',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547552c7993a01_70330951')) {function content_547552c7993a01_70330951($_smarty_tpl) {?><br>
<h3>Categor&iacute;as</h3>
		<button type="button" class="btn btn-primary glyphicon glyphicon-plus" onclick="location.href='./add/insertarCategorias/index.php'">
	  Agregar
	</button>
<br>
<br>
<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>