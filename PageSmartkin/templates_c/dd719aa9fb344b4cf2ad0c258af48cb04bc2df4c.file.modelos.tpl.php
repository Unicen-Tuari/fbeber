<?php /* Smarty version Smarty-3.1.14, created on 2014-10-16 05:02:57
         compiled from "./templates/modelos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1824452072543f2df9053fb5-82794494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd719aa9fb344b4cf2ad0c258af48cb04bc2df4c' => 
    array (
      0 => './templates/modelos.tpl',
      1 => 1413428565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1824452072543f2df9053fb5-82794494',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543f2df9256007_90031823',
  'variables' => 
  array (
    'modelos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f2df9256007_90031823')) {function content_543f2df9256007_90031823($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modelos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
	<img class="img-hover" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_modelo'];?>
">
<?php } ?>

	<?php }} ?>