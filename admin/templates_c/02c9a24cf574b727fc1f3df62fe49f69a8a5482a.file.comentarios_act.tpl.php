<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 02:21:35
         compiled from ".\templates\comentarios_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212395830fa9fd508a7-06184818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02c9a24cf574b727fc1f3df62fe49f69a8a5482a' => 
    array (
      0 => '.\\templates\\comentarios_act.tpl',
      1 => 1479592994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212395830fa9fd508a7-06184818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actividad' => 0,
    'comact' => 0,
    'dato' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5830faa010fde4_88367581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5830faa010fde4_88367581')) {function content_5830faa010fde4_88367581($_smarty_tpl) {?><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Comentarios sobre <?php echo $_smarty_tpl->tpl_vars['actividad']->value[0]['nombre'];?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['comact']->value==null){?>
<h4>No hay</h4>
<?php }else{ ?>

<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>

<table class="table">
<tr>
    <td class="text-center"><p><b><?php echo $_smarty_tpl->tpl_vars['dato']->value['apyno'];?>
 </b>dijo: </b><?php echo $_smarty_tpl->tpl_vars['dato']->value['comentario'];?>
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