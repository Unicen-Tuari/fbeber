<?php /* Smarty version Smarty-3.1.14, created on 2014-10-17 21:06:29
         compiled from "./templates/coleccion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7203526025440b45d593c01-69546557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf921cf82d2b65980ab8c747462926fd39f434b' => 
    array (
      0 => './templates/coleccion.tpl',
      1 => 1413572778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7203526025440b45d593c01-69546557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5440b45d669680_26921162',
  'variables' => 
  array (
    'colecciones' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440b45d669680_26921162')) {function content_5440b45d669680_26921162($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
	<button onClick = "getDataModelos(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_coleccion'];?>
);"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre_coleccion'];?>
</button>
	<img class="img-hover" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_coleccion'];?>
" onClick = "getDataModelos(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_coleccion'];?>
);">
<?php } ?>


 
	


	<?php }} ?>