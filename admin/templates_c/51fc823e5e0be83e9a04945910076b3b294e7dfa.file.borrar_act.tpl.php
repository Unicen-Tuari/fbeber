<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 02:22:11
         compiled from ".\templates\borrar_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132615830fac333a988-30359535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51fc823e5e0be83e9a04945910076b3b294e7dfa' => 
    array (
      0 => '.\\templates\\borrar_act.tpl',
      1 => 1479586965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132615830fac333a988-30359535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actividad' => 0,
    'act' => 0,
    'profeact' => 0,
    'profes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5830fac3657837_62101754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5830fac3657837_62101754')) {function content_5830fac3657837_62101754($_smarty_tpl) {?><div class="modal-header">

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
    			<?php echo $_smarty_tpl->tpl_vars['profes']->value['apyno'];?>
<br><?php echo $_smarty_tpl->tpl_vars['profes']->value['horarios'];?>

    			<br>
    <?php } ?>
  </div>

  <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <a class="btn btn-danger" href="#" onclick="borraAct('<?php echo $_smarty_tpl->tpl_vars['act']->value['id'];?>
')" aria-hidden="true" data-dismiss="modal">Eliminar</a>
  </div>
<?php } ?>

<?php }} ?>