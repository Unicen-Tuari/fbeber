<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 06:51:13
         compiled from "./templates/portfolios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213592898856544375c69a41-82832989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc1d85c508aa436fc77c1246043ae023e13e19f' => 
    array (
      0 => './templates/portfolios.tpl',
      1 => 1449726672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213592898856544375c69a41-82832989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375c8e0d8_16585660',
  'variables' => 
  array (
    'portfolios' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375c8e0d8_16585660')) {function content_56544375c8e0d8_16585660($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="col-md-12 fondoplaca"> <!--galeria-->

      <div class="col-md-2"></div>
      <div class="col-md-8 placa">
<h3>Smartkin anda vistiendo</h3> 
        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
            <div class="text-center port" >
              <img src="./images/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_port'];?>
" class="img-port" width="100%">
              <p><br><?php echo $_smarty_tpl->tpl_vars['imagen']->value['descripcion'];?>
</p>
            </div>
          <?php } ?>      </div>
      <div class="col-md-2"></div>
    </div>
      	


<?php echo $_smarty_tpl->getSubTemplate ("placa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>