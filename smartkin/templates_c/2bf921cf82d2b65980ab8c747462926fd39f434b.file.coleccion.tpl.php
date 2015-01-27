<?php /* Smarty version Smarty-3.1.14, created on 2015-01-26 00:00:36
         compiled from "./templates/coleccion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202665732454c573a4252086-81885528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf921cf82d2b65980ab8c747462926fd39f434b' => 
    array (
      0 => './templates/coleccion.tpl',
      1 => 1422226824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202665732454c573a4252086-81885528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54c573a4315fb1_63781549',
  'variables' => 
  array (
    'Colecciones' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c573a4315fb1_63781549')) {function content_54c573a4315fb1_63781549($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_col'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_col'];?>
">
      <div class="caption">
        <h4><?php echo $_smarty_tpl->tpl_vars['dato']->value['name_col'];?>
</h4>
        <p><button type="button" class="btn btn-default btn-sm">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ver todos los modelos
    </button>
      </div>
    </div>
  </div>
<?php } ?>
	<?php }} ?>