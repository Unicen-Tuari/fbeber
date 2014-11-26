<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 04:43:59
         compiled from "./templates/tabla_adminque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85741740354754c7fcb3df6-15923072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e165e922992a9008d0abdd2de002db069e0061e1' => 
    array (
      0 => './templates/tabla_adminque.tpl',
      1 => 1416930498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85741740354754c7fcb3df6-15923072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54754c7fd33875_69733336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54754c7fd33875_69733336')) {function content_54754c7fd33875_69733336($_smarty_tpl) {?><br>
<h3>Categor&iacute;as</h3>
	<button type="button" class="btn btn-primary" onclick="location.href='./add/insertarCategorias/index.php'">
		Agregar
	</button>

	<br><br>

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
	</table>

<?php }} ?>