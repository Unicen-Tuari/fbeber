<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 21:33:35
         compiled from "./templates/admin_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19551420485638beb880d054-51900266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d858028c2a921554ba84d77684c5e1ec900f907' => 
    array (
      0 => './templates/admin_usuarios.tpl',
      1 => 1446755601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19551420485638beb880d054-51900266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5638beb8853c49_76601109',
  'variables' => 
  array (
    'usuario' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638beb8853c49_76601109')) {function content_5638beb8853c49_76601109($_smarty_tpl) {?><br><br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Foto</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Mail</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
			<tr>
        	<?php if ($_smarty_tpl->tpl_vars['user']->value['habilitado']){?>
			  <td><?php echo $_smarty_tpl->tpl_vars['user']->value['img_user'];?>
</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
	        <?php }else{ ?>
	        	<td><?php echo $_smarty_tpl->tpl_vars['user']->value['img_user'];?>
</td>
	          <td><s><?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
</s></td>
	          <td><s><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</s></td>
	        <?php }?>
			</tr>
			
			<?php } ?>
		</tbody>
	</table><?php }} ?>