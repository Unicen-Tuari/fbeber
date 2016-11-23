<?php /* Smarty version Smarty-3.1.14, created on 2016-11-22 00:36:43
         compiled from ".\templates\borrar_profe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7355833850b97f004-65236095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a307b50bb26196c1eb4a88a46673bcaac9940552' => 
    array (
      0 => '.\\templates\\borrar_profe.tpl',
      1 => 1479587012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7355833850b97f004-65236095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profesor' => 0,
    'profe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5833850bc13311_84130635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5833850bc13311_84130635')) {function content_5833850bc13311_84130635($_smarty_tpl) {?><div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  
<?php  $_smarty_tpl->tpl_vars['profe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profesor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profe']->key => $_smarty_tpl->tpl_vars['profe']->value){
$_smarty_tpl->tpl_vars['profe']->_loop = true;
?>
<h3>¿Está seguro que desea eliminar al profesor <?php echo $_smarty_tpl->tpl_vars['profe']->value['apyno'];?>
?</h3>
    
<div  class="modal-body">
  <h4><img src="../images/<?php echo $_smarty_tpl->tpl_vars['profe']->value['foto'];?>
"></h4><br>
</div>

<div class="modal-footer text-center">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
  <a class="btn btn-danger" href="#" onclick="borraProfe('<?php echo $_smarty_tpl->tpl_vars['profe']->value['id'];?>
')" aria-hidden="true" data-dismiss="modal">Eliminar</a>
</div>
<?php } ?>

<?php }} ?>