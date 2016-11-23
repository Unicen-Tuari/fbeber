<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 12:05:43
         compiled from ".\templates\images_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25261583387aa57c023-67114022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dfa4c57de61c2e5f0e09084d8ab488f1f8eeec9' => 
    array (
      0 => '.\\templates\\images_act.tpl',
      1 => 1479899110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25261583387aa57c023-67114022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583387aa7e1535_84756208',
  'variables' => 
  array (
    'imagesact' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583387aa7e1535_84756208')) {function content_583387aa7e1535_84756208($_smarty_tpl) {?><div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3>Imágenes</h3>
</div>

<div  class="modal-body">
<input type="file" name="imagesToUpload[]" class="form-control" >
<?php if ($_smarty_tpl->tpl_vars['imagesact']->value==null){?>
<h1>No existen imagenes en esta actividad</h1>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagesact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
<input type="text" name="id_act" id="id_act" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['id_act'];?>
">
<img src="../images/<?php echo $_smarty_tpl->tpl_vars['img']->value['foto'];?>
" width="100px" height="100px;" class="zoom" style="margin: 2px">
<button class="btn btn-danger" onClick = "borraImagen(<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
);" type="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
<?php } ?>
<?php }?>
</div>

<div class="modal-footer text-center">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>

<?php }} ?>