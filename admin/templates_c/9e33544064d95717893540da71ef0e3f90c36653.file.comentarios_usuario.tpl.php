<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 02:24:22
         compiled from ".\templates\comentarios_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134425830fb4657ead2-06538756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e33544064d95717893540da71ef0e3f90c36653' => 
    array (
      0 => '.\\templates\\comentarios_usuario.tpl',
      1 => 1479599210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134425830fb4657ead2-06538756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuario' => 0,
    'comusuario' => 0,
    'dato' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5830fb468227f4_55396141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5830fb468227f4_55396141')) {function content_5830fb468227f4_55396141($_smarty_tpl) {?><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Comentarios de <?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['apyno'];?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['comusuario']->value==null){?>
<h4>No hay</h4>
<?php }else{ ?>

<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comusuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>

<table class="table">
<tr>
	<td><b><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</b></td>
    <td class="text-center"><p><?php echo $_smarty_tpl->tpl_vars['dato']->value['comentario'];?>
</p></td>
    <td class="text-right"><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['dato']->value['puntaje'];
  if ($_smarty_tpl->tpl_vars['i']->value>=1){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value>=1; $_smarty_tpl->tpl_vars['i']->value--){
?><span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> <?php }} ?></td>
    <td class="text-right"><button type="button" class="label label-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
</tr>
</table>
<?php } ?>
<?php }?>
      <?php }} ?>