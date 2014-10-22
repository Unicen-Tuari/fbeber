<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 02:43:03
         compiled from "./templates/coleccion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7292064455446ea8f7540c9-45546344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf921cf82d2b65980ab8c747462926fd39f434b' => 
    array (
      0 => './templates/coleccion.tpl',
      1 => 1413938566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7292064455446ea8f7540c9-45546344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5446ea8f88bb69_74754085',
  'variables' => 
  array (
    'colecciones' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5446ea8f88bb69_74754085')) {function content_5446ea8f88bb69_74754085($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
    <a onClick = "getDataModelos(<?php echo $_smarty_tpl->tpl_vars['nombre']->value['id_coleccion'];?>
);">
    	<img src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['nombre']->value['img_coleccion'];?>
" width="200px">
    </a>
<?php } ?>

<div id="tableModelos"></div>    <?php }} ?>