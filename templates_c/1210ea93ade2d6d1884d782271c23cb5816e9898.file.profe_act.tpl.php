<?php /* Smarty version Smarty-3.1.14, created on 2016-10-23 02:24:31
         compiled from ".\templates\profe_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3126458040e678ff054-58491448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1210ea93ade2d6d1884d782271c23cb5816e9898' => 
    array (
      0 => '.\\templates\\profe_act.tpl',
      1 => 1477182262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3126458040e678ff054-58491448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58040e67a1b662_45827265',
  'variables' => 
  array (
    'profeact' => 0,
    'actividad' => 0,
    'profes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58040e67a1b662_45827265')) {function content_58040e67a1b662_45827265($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['profeact']->value==null){?>
	<h3>Próximamente habrá info sobre <?php echo $_smarty_tpl->tpl_vars['actividad']->value[0]['nombre'];?>
</h3>

<?php }else{ ?>
	
	<h4>Profesores de <?php echo $_smarty_tpl->tpl_vars['actividad']->value[0]['nombre'];?>
</h4>

			<?php  $_smarty_tpl->tpl_vars['profes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profes']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profeact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profes']->key => $_smarty_tpl->tpl_vars['profes']->value){
$_smarty_tpl->tpl_vars['profes']->_loop = true;
?>

	<table class="table text-left">
		<tr>
		<td><img src="images/<?php echo $_smarty_tpl->tpl_vars['profes']->value['foto'];?>
" alt="..." class="img-circle" width="70px" height="70px"> <?php echo $_smarty_tpl->tpl_vars['profes']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['profes']->value['apellido'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['profes']->value['horarios'];?>
</td>
		</tr>
		</table>
	<?php } ?>
	
<?php }?>
      
<?php }} ?>