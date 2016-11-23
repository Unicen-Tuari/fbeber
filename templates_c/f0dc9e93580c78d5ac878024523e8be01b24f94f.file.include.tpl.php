<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 13:24:06
         compiled from ".\templates\include.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2177758358a66f1cbd5-18589299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0dc9e93580c78d5ac878024523e8be01b24f94f' => 
    array (
      0 => '.\\templates\\include.tpl',
      1 => 1479901361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2177758358a66f1cbd5-18589299',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58358a670bd112_04982306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58358a670bd112_04982306')) {function content_58358a670bd112_04982306($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div id="contenido">
  <?php echo $_smarty_tpl->getSubTemplate ('index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>