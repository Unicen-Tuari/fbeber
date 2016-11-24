<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 23:30:10
         compiled from ".\templates\com_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1059958359519440f12-28357961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '893ec93d875f791666d985aeaeac87f2bb4d2647' => 
    array (
      0 => '.\\templates\\com_act.tpl',
      1 => 1479940159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1059958359519440f12-28357961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583595196ae127_72393308',
  'variables' => 
  array (
    'comact' => 0,
    'dato' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583595196ae127_72393308')) {function content_583595196ae127_72393308($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['comact']->value==null){?>
<h3>No existen comentarios</h3>
<?php }else{ ?>

<h3><?php echo $_smarty_tpl->tpl_vars['comact']->value[0]['nombre'];?>
</h3>

<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>

<div class="col-md-6" style="padding: 2px;">
<div class="col-md-12 text-center" style="border: 0.5px solid #6142f4; border-radius: 20px;">
	<h3><b><?php echo $_smarty_tpl->tpl_vars['dato']->value['comentario'];?>
</b></h3> 
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['dato']->value['puntaje'];
  if ($_smarty_tpl->tpl_vars['i']->value>=1){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value>=1; $_smarty_tpl->tpl_vars['i']->value--){
?><span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> <?php }} ?><br>	
	<?php echo $_smarty_tpl->tpl_vars['dato']->value['apyno'];?>

</div>	
</div>
<?php } ?>

<?php }?>
      
<?php }} ?>