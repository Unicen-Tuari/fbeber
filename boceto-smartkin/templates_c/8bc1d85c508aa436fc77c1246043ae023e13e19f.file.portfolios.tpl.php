<?php /* Smarty version Smarty-3.1.14, created on 2015-10-22 15:13:24
         compiled from "./templates/portfolios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10186092715627c4c8d17c53-58633726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc1d85c508aa436fc77c1246043ae023e13e19f' => 
    array (
      0 => './templates/portfolios.tpl',
      1 => 1445519593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10186092715627c4c8d17c53-58633726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5627c4c8d85340_09283411',
  'variables' => 
  array (
    'portfolios' => 0,
    'portfolio' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627c4c8d85340_09283411')) {function content_5627c4c8d85340_09283411($_smarty_tpl) {?><div class="page-header"></div>
<div class="portfolios">
  <h1>Portfolios</h1>
  <p>NOTA: hacer galeria</p>
</div>
      
<ul class="list-group">
  <?php  $_smarty_tpl->tpl_vars['portfolio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['portfolio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['portfolio']->key => $_smarty_tpl->tpl_vars['portfolio']->value){
$_smarty_tpl->tpl_vars['portfolio']->_loop = true;
?>
    <li class="list-group-item">
      <?php echo $_smarty_tpl->tpl_vars['portfolio']->value['name_port'];?>

      <?php echo $_smarty_tpl->tpl_vars['portfolio']->value['descrip_port'];?>

      <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolio']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path_port'];?>
" class="img-thumbnail" width="100px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" />
      <?php } ?>
    </li>
  <?php } ?>
</ul>
        <?php }} ?>