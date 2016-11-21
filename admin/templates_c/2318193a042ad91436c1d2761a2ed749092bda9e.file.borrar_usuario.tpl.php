<?php /* Smarty version Smarty-3.1.14, created on 2016-11-21 16:28:07
         compiled from ".\templates\borrar_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23955583312870507c5-90637959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2318193a042ad91436c1d2761a2ed749092bda9e' => 
    array (
      0 => '.\\templates\\borrar_usuario.tpl',
      1 => 1479395316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23955583312870507c5-90637959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuario' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583312873daca6_57764335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583312873daca6_57764335')) {function content_583312873daca6_57764335($_smarty_tpl) {?><div class="modal-header">

  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <h3>Borrar usuario</h3>
    

  <div  class="modal-body">
    <h4>¿Está seguro que desea eliminar al usuario <?php echo $_smarty_tpl->tpl_vars['user']->value['apyno'];?>
?</h4>
  </div>

  <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <a class="btn btn-danger" href="#" onclick="borraUsuario('<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
')" aria-hidden="true" data-dismiss="modal">Eliminar</a>
  </div>
<?php } ?>

<?php }} ?>