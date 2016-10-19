<?php /* Smarty version Smarty-3.1.14, created on 2016-10-19 17:32:50
         compiled from ".\templates\modif_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116375806db53aebbf4-18170688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c75a4f8ba1937df619ca095bc4a08ecd4bb9b09e' => 
    array (
      0 => '.\\templates\\modif_act.tpl',
      1 => 1476890112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116375806db53aebbf4-18170688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5806db53af38f6_97012367',
  'variables' => 
  array (
    'actividad' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5806db53af38f6_97012367')) {function content_5806db53af38f6_97012367($_smarty_tpl) {?><div class="modal-header">
<?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="myModalLabel">Modificar los datos de <?php echo $_smarty_tpl->tpl_vars['act']->value['nombre'];?>
</h4>
</div>
<div class="modal-body">
<form action="index.php?action=modificar_actividad&id_act=<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
" method="POST" enctype="multipart/form-data">
   <img id="img_destino" class="img-circle zoom" width="80px" height="80px" src="../images/<?php echo $_smarty_tpl->tpl_vars['act']->value['foto'];?>
"><input type="file" name="imagesToUpload[]" id="imagesToUpload"/><br>
  <input type="text" class="form-control" id="upd_nombre_a" name="upd_nombre_a" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['nombre'];?>
"><br>
  <input type="text" class="form-control" id="upd_descripcion_a" name="upd_descripcion_a" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['descripcion'];?>
"><br>
 
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="submit" class="btn btn-primary">Modificar</button>
</form>
<?php } ?>
</div><?php }} ?>