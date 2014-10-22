<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 06:14:27
         compiled from "./templates/coleccion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61505959654470eca2d1f03-90358529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf921cf82d2b65980ab8c747462926fd39f434b' => 
    array (
      0 => './templates/coleccion.tpl',
      1 => 1413951264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61505959654470eca2d1f03-90358529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54470eca40f065_61824182',
  'variables' => 
  array (
    'colecciones' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54470eca40f065_61824182')) {function content_54470eca40f065_61824182($_smarty_tpl) {?><h3>Colecciones</h3>
	<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
		<img class="zoom" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_coleccion'];?>
" onClick = "getDataModelos(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_coleccion'];?>
);" alt="<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_coleccion'];?>
" width="140px" height="140px">
	<?php } ?>
<br>
<br>
<div id="modelos"></div><?php }} ?>