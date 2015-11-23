<?php /* Smarty version Smarty-3.1.14, created on 2015-11-11 14:02:19
         compiled from "./templates/admin_informacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2301521465638beb87d4d69-82745472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f46ad57aa2ab02bf99fe1bee4e37f67953a3f0' => 
    array (
      0 => './templates/admin_informacion.tpl',
      1 => 1447246933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2301521465638beb87d4d69-82745472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5638beb88045a0_28053687',
  'variables' => 
  array (
    'informacion' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638beb88045a0_28053687')) {function content_5638beb88045a0_28053687($_smarty_tpl) {?><br>
<br>
<p class="text-center">Esta información se publicará en la sección "Contacto" del sitio web Smartkin.<br>

Para modificar, borrar o agregar información solo haz click en el icono correspondiente</p>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Telefono 1</th>
				<th class="text-center">Telefono 2</th>
				<th class="text-center">Direccion 1</th>
				<th class="text-center">Direccion 2</th>
				<th class="text-center">Email</th>
				<th class="text-center">Otro</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informacion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['tel1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['tel2'];?>
</td>	
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['dir1'];?>
</td>	
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['dir2'];?>
</td>	
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
</td>	
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['otro'];?>
</td>	
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>