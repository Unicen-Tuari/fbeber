<?php /* Smarty version Smarty-3.1.14, created on 2016-11-24 18:17:20
         compiled from ".\templates\borrar_comentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19973583720a0d465c1-63695700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8413b0b7c00c02ac3040b41ade2d4393508201d2' => 
    array (
      0 => '.\\templates\\borrar_comentario.tpl',
      1 => 1480005678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19973583720a0d465c1-63695700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comentario' => 0,
    'dato' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583720a11b9617_52595893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583720a11b9617_52595893')) {function content_583720a11b9617_52595893($_smarty_tpl) {?><div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
<h3>¿Está seguro que desea eliminar este comentario?</h3>
    
<div  class="modal-body">
  <table class="table text-left">
<tr>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['dato']->value['puntaje'];
  if ($_smarty_tpl->tpl_vars['i']->value>=1){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value>=1; $_smarty_tpl->tpl_vars['i']->value--){
?><span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> <?php }} ?></td>
    <td class="text-center"><p><?php echo $_smarty_tpl->tpl_vars['dato']->value['comentario'];?>
</p></td>

</tr>
</table>
</div>

<div class="modal-footer text-center">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
  <a class="btn btn-danger" href="#" onclick="borraComentario('<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
')" aria-hidden="true" data-dismiss="modal">Eliminar</a>
</div>
<?php } ?>
<?php }} ?>