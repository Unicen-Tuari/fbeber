<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 14:19:46
         compiled from ".\templates\comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23304583593ffa477e6-28327988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18bd6667388e6e0869f2d9723a607539c44dfb31' => 
    array (
      0 => '.\\templates\\comentarios.tpl',
      1 => 1479907184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23304583593ffa477e6-28327988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583593ffbb6b39_46796447',
  'variables' => 
  array (
    'comentarios' => 0,
    'dato' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583593ffbb6b39_46796447')) {function content_583593ffbb6b39_46796447($_smarty_tpl) {?><h3>Tu opinión nos importa!</h3>
<div class="col-md-12 text-center">
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
<div style="border: 0.5px solid #6142f4; border-radius: 20px; width: 20%;">
	<h3><b><?php echo $_smarty_tpl->tpl_vars['dato']->value['apyno'];?>
</b> comentó sobre <?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</h3>
	<h4><b><?php echo $_smarty_tpl->tpl_vars['dato']->value['comentario'];?>
</b></h4> 
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['dato']->value['puntaje'];
  if ($_smarty_tpl->tpl_vars['i']->value>=1){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value>=1; $_smarty_tpl->tpl_vars['i']->value--){
?><span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> <?php }} ?><br>	
</div>	
 <?php } ?>
</div><?php }} ?>