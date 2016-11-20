<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 17:31:29
         compiled from ".\templates\images_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284595831cda4b3aae5-95995945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dfa4c57de61c2e5f0e09084d8ab488f1f8eeec9' => 
    array (
      0 => '.\\templates\\images_act.tpl',
      1 => 1479659485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284595831cda4b3aae5-95995945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5831cda4dcedf8_60703661',
  'variables' => 
  array (
    'img' => 0,
    'imagesact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5831cda4dcedf8_60703661')) {function content_5831cda4dcedf8_60703661($_smarty_tpl) {?><div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3>Imágenes</h3>
</div>

<div  class="modal-body">
<a class="btn btn-success" href="#" onclick="borraImgAct('<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
')" aria-hidden="true" data-dismiss="modal">Agregar más imágenes</a><br>
<?php if ($_smarty_tpl->tpl_vars['imagesact']->value==null){?>
<h1>No existen imagenes en esta actividad</h1>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagesact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
<img src="../images/<?php echo $_smarty_tpl->tpl_vars['img']->value['foto'];?>
" width="100px" height="100px;" class="zoom" style="margin: 2px">
<a class="btn btn-danger" href="#" onclick="borraImgAct('<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
')" aria-hidden="true" data-dismiss="modal">Eliminar</a><?php } ?>
<?php }?>
</div>

  <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div>

<?php }} ?>