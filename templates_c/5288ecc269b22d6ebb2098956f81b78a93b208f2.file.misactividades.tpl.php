<?php /* Smarty version Smarty-3.1.14, created on 2016-11-24 17:46:33
         compiled from ".\templates\misactividades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1351158370d74c7ae39-63620401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5288ecc269b22d6ebb2098956f81b78a93b208f2' => 
    array (
      0 => '.\\templates\\misactividades.tpl',
      1 => 1480005394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1351158370d74c7ae39-63620401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58370d74dab976_59040965',
  'variables' => 
  array (
    'misactividades' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58370d74dab976_59040965')) {function content_58370d74dab976_59040965($_smarty_tpl) {?><table class="table">
    <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['misactividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
    <tr>
      <td><b><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</b></td>
      <td><?php echo $_smarty_tpl->tpl_vars['dato']->value['apyno'];?>
</td>
      <td>$dato.horarios}</td>
      <td class="text-right"><button type="button" class="label label-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
    </tr>
    <?php } ?>
  </table>
  <?php }} ?>