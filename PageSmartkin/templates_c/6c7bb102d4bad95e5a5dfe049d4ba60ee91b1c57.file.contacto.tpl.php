<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 06:34:41
         compiled from "./templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9763737544733e1895570-74576928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7bb102d4bad95e5a5dfe049d4ba60ee91b1c57' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1413952463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9763737544733e1895570-74576928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resultado' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_544733e1a9cd99_20074464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544733e1a9cd99_20074464')) {function content_544733e1a9cd99_20074464($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="jumbotron">
		<div id="tableData">
	    	<h3>Contacto</h3>
	    	<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
	    		<?php echo $_smarty_tpl->tpl_vars['dato']->value['direccion'];?>

	    	<?php } ?>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>