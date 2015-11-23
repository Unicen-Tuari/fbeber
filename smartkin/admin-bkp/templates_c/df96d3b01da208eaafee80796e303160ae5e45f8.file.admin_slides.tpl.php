<?php /* Smarty version Smarty-3.1.14, created on 2015-11-19 20:35:02
         compiled from "./templates/admin_slides.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2910969425641d4553c2ec9-54446121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df96d3b01da208eaafee80796e303160ae5e45f8' => 
    array (
      0 => './templates/admin_slides.tpl',
      1 => 1447959844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2910969425641d4553c2ec9-54446121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5641d4553e2078_91832532',
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641d4553e2078_91832532')) {function content_5641d4553e2078_91832532($_smarty_tpl) {?><p>Estas imagenes se visualizarán como una presentación al inicio del sitio web Smartkin, se recomienda subir imagenes con datos a comunicar como novedad o noticia! ;)
<br>
*Dato: más de cuatro imagenes no se podra subir.</p>
<br>
<h4>Se recomienda que las imagenes sean de 250x900 pixeles para su mejor visualizacion</h4>
<br>

	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Nombre</th>
				<th class="text-center">Slides</th>
				<th class="text-center">Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['slide']->value['path_slide'];?>
</td>
				<td><a class="glyphicon glyphicon-trash" href="index.php?action=borrar_slide&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
">Borrar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>



<?php }} ?>