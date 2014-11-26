<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 06:27:15
         compiled from "./templates/tabla_admincol.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166461522854754e3f0a09e7-22190513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4fdc59c20503e9520eb7f0a097dce92a4a5bd2e' => 
    array (
      0 => './templates/tabla_admincol.tpl',
      1 => 1416979630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166461522854754e3f0a09e7-22190513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54754e3f4e51e8_28055530',
  'variables' => 
  array (
    'colecciones' => 0,
    'coleccion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54754e3f4e51e8_28055530')) {function content_54754e3f4e51e8_28055530($_smarty_tpl) {?><br>
	<h3>Colecciones</h3>
	<button type="button" class="btn btn-primary glyphicon glyphicon-plus" onclick="location.href='./add/insertarColecciones/index.php'">
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
			<?php  $_smarty_tpl->tpl_vars['coleccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coleccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coleccion']->key => $_smarty_tpl->tpl_vars['coleccion']->value){
$_smarty_tpl->tpl_vars['coleccion']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_coleccion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['coleccion']->value['nombre_coleccion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['coleccion']->value['img_coleccion'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>