<?php /* Smarty version Smarty-3.1.14, created on 2016-10-19 01:11:59
         compiled from ".\templates\modal_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112065803d6f377eb40-80988629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b548a4f3390fa895c33e44c60e12d228e72c55d' => 
    array (
      0 => '.\\templates\\modal_act.tpl',
      1 => 1476831509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112065803d6f377eb40-80988629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5803d6f39055a2_11604608',
  'variables' => 
  array (
    'actividad' => 0,
    'act' => 0,
    'profeact' => 0,
    'profes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5803d6f39055a2_11604608')) {function content_5803d6f39055a2_11604608($_smarty_tpl) {?><div class="modal-header">

  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php  $_smarty_tpl->tpl_vars['act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['act']->key => $_smarty_tpl->tpl_vars['act']->value){
$_smarty_tpl->tpl_vars['act']->_loop = true;
?>
    <h3>¿Está seguro que desea eliminar la actividad <?php echo $_smarty_tpl->tpl_vars['act']->value['nombre'];?>
?</h3>
    

  <div  class="modal-body">
    <h4>RECUERDE que junto a esta actividad también se eliminaran el/los siguientes profesores:</h4><br>
    <?php  $_smarty_tpl->tpl_vars['profes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profes']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profeact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profes']->key => $_smarty_tpl->tpl_vars['profes']->value){
$_smarty_tpl->tpl_vars['profes']->_loop = true;
?>
    			<?php echo $_smarty_tpl->tpl_vars['profes']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['profes']->value['apellido'];?>
<br><?php echo $_smarty_tpl->tpl_vars['profes']->value['horarios'];?>

    			<br>
    <?php } ?>
  </div>

  <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
    <button class="btn btn-danger" onClick = "borrarAct(<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
);" type="button"><a id="actividades_admin" href="#">SI</a></button>
  </div>
<?php } ?>

<?php }} ?>