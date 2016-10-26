<?php /* Smarty version Smarty-3.1.14, created on 2016-10-27 00:04:20
         compiled from ".\templates\modif_profe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24757580e826e496f30-38261092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63c79ca90073ef8e36e19b3a0ab7f3cdb5433ad3' => 
    array (
      0 => '.\\templates\\modif_profe.tpl',
      1 => 1477519458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24757580e826e496f30-38261092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580e826e6dd035_13174486',
  'variables' => 
  array (
    'profesor' => 0,
    'dato' => 0,
    'actividades' => 0,
    'actividad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580e826e6dd035_13174486')) {function content_580e826e6dd035_13174486($_smarty_tpl) {?><div class="modal-header">
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profesor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar los datos de <?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</h4>
      </div>
      <div class="modal-body">
        <form id="modifica_profesor" method="POST">
        
            <select id="upd_id_act_p" name="upd_id_act_p">
            <option  value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_act'];?>
">Ver todas</option>
              <?php  $_smarty_tpl->tpl_vars['actividad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actividad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['actividad']->key => $_smarty_tpl->tpl_vars['actividad']->value){
$_smarty_tpl->tpl_vars['actividad']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
</option>
              <?php } ?>
            </select>
            <br>
            <input type="hidden" class="form-control" id="id_profe" name="id_profe" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
">
            <input type="text" class="form-control" id="upd_horarios_p" name="upd_horarios_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['horarios'];?>
">
            <input type="text" class="form-control" id="upd_nombre_p" name="upd_nombre_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
">
            <input type="text" class="form-control" id="upd_apellido_p" name="upd_apellido_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['apellido'];?>
">
            <input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dni'];?>
">
            <input type="text" class="form-control" id="upd_descripcion_p" name="upd_descripcion_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['descripcion'];?>
">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a class="btn btn-info" href="#" onclick="modProfe();" aria-hidden="true" data-dismiss="modal">Modificar</a>
        </form>
        <?php } ?>
      </div><?php }} ?>