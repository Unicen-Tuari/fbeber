<?php /* Smarty version Smarty-3.1.14, created on 2016-10-13 01:45:37
         compiled from ".\templates\include.tpl" */ ?>
<?php /*%%SmartyHeaderCode:854157fecb21a2a805-77262523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0dc9e93580c78d5ac878024523e8be01b24f94f' => 
    array (
      0 => '.\\templates\\include.tpl',
      1 => 1476314911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '854157fecb21a2a805-77262523',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57fecb21c59204_54064545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fecb21c59204_54064545')) {function content_57fecb21c59204_54064545($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div id="contenido">
  <?php echo $_smarty_tpl->getSubTemplate ('index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>