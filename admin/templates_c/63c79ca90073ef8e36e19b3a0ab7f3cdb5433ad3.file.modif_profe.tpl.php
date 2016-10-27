<?php /* Smarty version Smarty-3.1.14, created on 2016-10-27 13:30:46
         compiled from ".\templates\modif_profe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24757580e826e496f30-38261092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63c79ca90073ef8e36e19b3a0ab7f3cdb5433ad3' => 
    array (
      0 => '.\\templates\\modif_profe.tpl',
      1 => 1477567842,
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

      <div class="col-md-12 modal-body">
        <form id="modifica_profesor" method="POST">
          <div class="col-md-12"><p>Cambie la foto de perfil</p>         
          <input type="file" name="imagesToUpload[]" id="imagesToUpload" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['foto'];?>
"></div>
          <input type="hidden" class="form-control" id="id_profe" name="id_profe" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
">
          <div class="col-md-4"><p><br>Nombre:</p><input type="text" class="form-control" id="upd_nombre_p" name="upd_nombre_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
"></div>
          <div class="col-md-4"><p><br>Apellido:</p><input type="text" class="form-control" id="upd_apellido_p" name="upd_apellido_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['apellido'];?>
"></div>
          <div class="col-md-4"><p><br>DNI:</p><input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dni'];?>
"></div>
          <div class="col-md-12"><p><br>Descripción:</p><textarea type="text" class="form-control" id="upd_descripcion_p" name="upd_descripcion_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['descripcion'];?>
"></textarea></div>
          <div class="col-md-6"><p><br>Actividad:</p>
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
          </div>
          <div class="col-md-6"><p><br>Horarios:</p><input type="text" class="form-control" id="upd_horarios_p" name="upd_horarios_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['horarios'];?>
"></div>
        </div> 
    
      

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<a class="btn btn-info" href="#" onclick="modProfe();" aria-hidden="true" data-dismiss="modal">Modificar</a>
<?php } ?>
</div>
</form><?php }} ?>