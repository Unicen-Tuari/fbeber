<?php /* Smarty version Smarty-3.1.14, created on 2015-01-27 02:35:23
         compiled from "./templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214456752354c6541738ecb3-45347004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7bb102d4bad95e5a5dfe049d4ba60ee91b1c57' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1422322521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214456752354c6541738ecb3-45347004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54c654174636c9_50329370',
  'variables' => 
  array (
    'info' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c654174636c9_50329370')) {function content_54c654174636c9_50329370($_smarty_tpl) {?><div class="col-md-5 text-center">
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
  <p class="lead" >
    <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
    <?php echo $_smarty_tpl->tpl_vars['dato']->value['tel'];?>

  </p>
  <p class="lead">
    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 
    <?php echo $_smarty_tpl->tpl_vars['dato']->value['tel'];?>

  </p>
  <p class="lead">
    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 
    <?php echo $_smarty_tpl->tpl_vars['dato']->value['dir'];?>

  </p>

  <h3><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Redes Sociales</h3>
  <a href="http://<?php echo $_smarty_tpl->tpl_vars['dato']->value['face'];?>
"><img src="./images/face.png" class="icono_redes"></a>
  <a href="http://<?php echo $_smarty_tpl->tpl_vars['dato']->value['twitter'];?>
"><img src="./images/twitter.png"  class="icono_redes"></a>
  <a href="http://<?php echo $_smarty_tpl->tpl_vars['dato']->value['google'];?>
"><img src="./images/google.png"  class="icono_redes"></a>
  <a href="http://<?php echo $_smarty_tpl->tpl_vars['dato']->value['mercado_libre'];?>
"><img src="./images/mercadolibre.png"  class="icono_redes"></a>
<?php } ?>
</div><?php }} ?>