<?php /* Smarty version Smarty-3.1.14, created on 2016-11-24 10:56:51
         compiled from ".\templates\comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14045836ac663ac9b4-71964420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18bd6667388e6e0869f2d9723a607539c44dfb31' => 
    array (
      0 => '.\\templates\\comentarios.tpl',
      1 => 1479981378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14045836ac663ac9b4-71964420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5836ac6669aa66_64060564',
  'variables' => 
  array (
    'comentarios' => 0,
    'dato' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5836ac6669aa66_64060564')) {function content_5836ac6669aa66_64060564($_smarty_tpl) {?><h1>Comentarios</h1>
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
<div class="col-md-4">
<table class="table text-left">
<tr>
	<td><p><b><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</b></p>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['dato']->value['puntaje'];
  if ($_smarty_tpl->tpl_vars['i']->value>=1){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value>=1; $_smarty_tpl->tpl_vars['i']->value--){
?><span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> <?php }} ?></td>
    <td class="text-center"><p><?php echo $_smarty_tpl->tpl_vars['dato']->value['comentario'];?>
</p></td>
    <td class="text-right"><button class="btn btn-default" onClick = "infoComentario(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
);" type="button" data-toggle="modal" data-target="#borrarComentario"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
</tr>
</table>
</div>
 <?php } ?>

<!--borrar comentario-->
<div id="borrarComentario" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoComentario" class="modal-content">
<h1>llega a aca</h1>
</div>
</div>
</div><?php }} ?>