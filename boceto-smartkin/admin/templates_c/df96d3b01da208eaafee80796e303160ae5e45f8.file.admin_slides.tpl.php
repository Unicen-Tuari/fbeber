<?php /* Smarty version Smarty-3.1.14, created on 2015-10-23 14:59:52
         compiled from "./templates/admin_slides.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167252350056290fe12830c3-41984315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df96d3b01da208eaafee80796e303160ae5e45f8' => 
    array (
      0 => './templates/admin_slides.tpl',
      1 => 1445605187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167252350056290fe12830c3-41984315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56290fe12a3d30_28363515',
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56290fe12a3d30_28363515')) {function content_56290fe12a3d30_28363515($_smarty_tpl) {?><p>Estas imagenes se visualizarán como una presentación al inicio del sitio web Smartkin, se recomienda subir imagenes con datos a comunicar como novedad o noticia! ;)
<br>
*Dato: más de cuatro imagenes no se podra subir.</p>
<br>
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
"></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>