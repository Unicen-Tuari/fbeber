<?php /* Smarty version Smarty-3.1.14, created on 2014-10-16 02:37:09
         compiled from "./templates/data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:633443165543f103da95ce0-45593284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39c5dce238daf4e54f8f8c4b8daadbbaadba35b' => 
    array (
      0 => './templates/data.tpl',
      1 => 1413419467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633443165543f103da95ce0-45593284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543f103db2a109_32175820',
  'variables' => 
  array (
    'datos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f103db2a109_32175820')) {function content_543f103db2a109_32175820($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre_coleccion'];?>
</td>
	
</tr>
<?php } ?>
	<?php }} ?>