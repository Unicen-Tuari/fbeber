<?php /* Smarty version Smarty-3.1.14, created on 2016-11-22 00:27:16
         compiled from ".\templates\modif_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20867583382d4f1fef1-50608166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c75a4f8ba1937df619ca095bc4a08ecd4bb9b09e' => 
    array (
      0 => '.\\templates\\modif_act.tpl',
      1 => 1477568523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20867583382d4f1fef1-50608166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actividad' => 0,
    'act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583382d524ad01_52584790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583382d524ad01_52584790')) {function content_583382d524ad01_52584790($_smarty_tpl) {?><div class="modal-header">
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

	<form id="modifica_actividad" method="post">
   	<input type="hidden" class="form-control" id="id_act" name="id_act" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
"><br>
  	<p>Nombre:</p><input type="text" class="form-control" id="upd_nombre_a" name="upd_nombre_a" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['nombre'];?>
"><br>

  	<p>Descripción:</p><input type="text" class="form-control" id="upd_descripcion_a" name="upd_descripcion_a" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['descripcion'];?>
"><br>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<a class="btn btn-info" href="#" onclick="modAct();" aria-hidden="true" data-dismiss="modal">
Modificar</a><?php } ?>
</div>

</form><?php }} ?>