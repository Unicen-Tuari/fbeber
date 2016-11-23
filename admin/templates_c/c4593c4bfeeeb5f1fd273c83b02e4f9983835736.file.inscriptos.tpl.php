<?php /* Smarty version Smarty-3.1.14, created on 2016-11-22 00:36:11
         compiled from ".\templates\inscriptos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1899958321b6fd23bb4-11198140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4593c4bfeeeb5f1fd273c83b02e4f9983835736' => 
    array (
      0 => '.\\templates\\inscriptos.tpl',
      1 => 1479771366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899958321b6fd23bb4-11198140',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58321b6fecd890_17471376',
  'variables' => 
  array (
    'profesor' => 0,
    'inscriptos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58321b6fecd890_17471376')) {function content_58321b6fecd890_17471376($_smarty_tpl) {?><div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Profesor <?php echo $_smarty_tpl->tpl_vars['profesor']->value[0]['apyno'];?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['inscriptos']->value==null){?>
<h4>No hay</h4>
<?php }else{ ?>

<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inscriptos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>

<table class="table table-striped">
<tr>
    <td class="text-center"><p><b><?php echo $_smarty_tpl->tpl_vars['dato']->value['apyno'];?>
</td>
    
</tr>
</table>
<?php } ?>
<?php }?>
      
<?php }} ?>