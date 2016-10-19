<?php /* Smarty version Smarty-3.1.14, created on 2016-10-19 01:16:54
         compiled from ".\templates\profe_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3126458040e678ff054-58491448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1210ea93ade2d6d1884d782271c23cb5816e9898' => 
    array (
      0 => '.\\templates\\profe_act.tpl',
      1 => 1476832578,
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
    'act' => 0,
    'profes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58040e67a1b662_45827265')) {function content_58040e67a1b662_45827265($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['profeact']->value==null){?>
<?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
	<h4>Próximamente habrá info sobre <?php echo $_smarty_tpl->tpl_vars['act']->value['nombre'];?>
</h4>
<?php } ?>
<?php }else{ ?>
	<?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
	<h4> <?php echo $_smarty_tpl->tpl_vars['act']->value['nombre'];?>
</h4>
<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['profes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profes']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profeact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profes']->key => $_smarty_tpl->tpl_vars['profes']->value){
$_smarty_tpl->tpl_vars['profes']->_loop = true;
?>
		<div>
		<img src="images/perfiles/<?php echo $_smarty_tpl->tpl_vars['profes']->value['foto'];?>
" alt="..." class="img-circle" width="70px" height="70px"><br><?php echo $_smarty_tpl->tpl_vars['profes']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['profes']->value['apellido'];?>
 - Profesor de <?php echo $_smarty_tpl->tpl_vars['profes']->value['nombreAct'];?>
<br><?php echo $_smarty_tpl->tpl_vars['profes']->value['horarios'];?>

		</div>
		<br>
	<?php } ?>
<?php }?>
      
<?php }} ?>