<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 22:24:21
         compiled from "./templates/admin_comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17259982225638beb878cf10-90456387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aabe2e32038ac92c6820fdb7f6febbda536d9aac' => 
    array (
      0 => './templates/admin_comentarios.tpl',
      1 => 1446758660,
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
    'usuario' => 0,
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638beb87cbf28_15501760')) {function content_5638beb87cbf28_15501760($_smarty_tpl) {?><br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Fecha</th>
				<th class="text-center">Comentario</th>
				<th class="text-center">Borrar</th>

			</tr>
		</thead>
		<tbody>
			
			<tr>
			<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
				<form id="formComments" class="appnitro"  method="post" action="">
	    		<td><input id="date_com" name= "new_date_com" class="element text" maxlength="20" size="20" value=""/></td>
	    		<input id="comentario" name= "new_comentario" class="element text" maxlength="20" size="20" value=""/>
	    		<input id="id_user" name= "$user['id_user']" class="element text" maxlength="20" size="20" value=""/>
	    		<input id="saveForm" class="button_text" type="submit" name="saveForm" value="Listo!" />
			</form>
			<?php } ?>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['comentario']->value['date_com'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>
</td>
				<td><a class="" href="index.php?action=borrar_comentario&id_com=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_com'];?>
">Borrar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>