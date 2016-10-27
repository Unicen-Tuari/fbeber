<?php /* Smarty version Smarty-3.1.14, created on 2016-10-27 02:25:47
         compiled from ".\templates\images_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21897581148a53b1ac5-02232722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dfa4c57de61c2e5f0e09084d8ab488f1f8eeec9' => 
    array (
      0 => '.\\templates\\images_act.tpl',
      1 => 1477527938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21897581148a53b1ac5-02232722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_581148a558a5b3_09960592',
  'variables' => 
  array (
    'imagesact' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581148a558a5b3_09960592')) {function content_581148a558a5b3_09960592($_smarty_tpl) {?><div class="modal-header">

  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>

  <div  class="modal-body">
<?php if ($_smarty_tpl->tpl_vars['imagesact']->value==null){?>
<h1>no Existen imagenes en esta actividad</h1>
<?php }else{ ?>
    <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagesact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
    <img src="images/<?php echo $_smarty_tpl->tpl_vars['img']->value['foto'];?>
" width="200px" class="zoom">
    <?php } ?>
<?php }?>
  </div>

  <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div>

<?php }} ?>