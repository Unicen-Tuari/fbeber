<?php /* Smarty version Smarty-3.1.14, created on 2015-11-20 00:41:24
         compiled from "./templates/admin_comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17259982225638beb878cf10-90456387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aabe2e32038ac92c6820fdb7f6febbda536d9aac' => 
    array (
      0 => './templates/admin_comentarios.tpl',
      1 => 1447976482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17259982225638beb878cf10-90456387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5638beb87cbf28_15501760',
  'variables' => 
  array (
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638beb87cbf28_15501760')) {function content_5638beb87cbf28_15501760($_smarty_tpl) {?><br>
<br><p>El poder tener un listado del total de los comentarios con la opcion de eliminarlos, nos posibilita eliminar aquellos comentarios con palabras inadecuadas, y acorde a esto tomar la desicion de bloquear al usuario en cuestión. </p>


	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Foto</th>
				<th class="text-center">Usuario</th>
				<th class="text-center">Fecha</th>
				<th class="text-center">Comentario</th>
				<th class="text-center">Borrar</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['comentario']->value['img_user'];?>
</td>
					<?php if ($_smarty_tpl->tpl_vars['comentario']->value['bloqueado']){?>
				<td> 
					<a class="" href="index.php?action=no_habilitar_usuario&id_user=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_user'];?>
">Bloquear</a> | <?php echo $_smarty_tpl->tpl_vars['comentario']->value['name_user'];?>

				</td>
				<?php }else{ ?>
				<td>
					<s><?php echo $_smarty_tpl->tpl_vars['comentario']->value['name_user'];?>
</s>
				</td>	
				<?php }?>
				<td><?php echo $_smarty_tpl->tpl_vars['comentario']->value['fecha_com'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>
</td>
				<td><a class="glyphicon glyphicon-trash" href="index.php?action=borrar_comentario&id_com=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_com'];?>
"></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>