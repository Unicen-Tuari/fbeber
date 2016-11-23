<?php /* Smarty version Smarty-3.1.14, created on 2016-11-22 23:40:30
         compiled from ".\templates\modif_profe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32126583384f8b18932-36886420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63c79ca90073ef8e36e19b3a0ab7f3cdb5433ad3' => 
    array (
      0 => '.\\templates\\modif_profe.tpl',
      1 => 1479773294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32126583384f8b18932-36886420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583384f8e7bd03_44330679',
  'variables' => 
  array (
    'profesor' => 0,
    'dato' => 0,
    'actividades' => 0,
    'actividad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583384f8e7bd03_44330679')) {function content_583384f8e7bd03_44330679($_smarty_tpl) {?><div class="modal-header">
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profesor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modificar los datos de <?php echo $_smarty_tpl->tpl_vars['dato']->value['apyno'];?>
</h4>
</div>

      <div class="col-md-12 modal-body">
        <form id="modifica_profesor" method="POST">
          <div class="col-md-12"><p>Cambie la foto de perfil</p>         
          <input type="file" name="imagesToUpload[]" id="imagesToUpload" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['foto'];?>
"><br></div>
          
          <input type="hidden" class="form-control" id="id_profe" name="id_profe" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
">
          <div class="col-md-7"><p><br>Nombre y Apellido:</p><input type="text" class="form-control" id="upd_apyno_p" name="upd_apyno_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['apyno'];?>
"></div>
          <div class="col-md-5"><p><br>DNI:</p><input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dni'];?>
"></div>
          <div class="col-md-6"><p><br>Correo Electrónico:</p><input type="text" class="form-control" id="upd_email_p" name="upd_email_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['email'];?>
"></div>
          <div class="col-md-6"><p><br>Contraseña:</p><input type="text" class="form-control" id="upd_pass_p" name="upd_pass_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['pass'];?>
"></div>
          <div class="col-md-12">
          <p><br>Permisos:</p><?php if ($_smarty_tpl->tpl_vars['dato']->value['id']==1){?>No se pueden modificar los permisos de este admin
          <?php }else{ ?>
          <select id="upd_permisos_p" name="upd_permisos_p" class="form-control text-center">
            <?php if ($_smarty_tpl->tpl_vars['dato']->value['is_admin']==0){?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['is_admin'];?>
">Conceder Permisos de Administrador</option>
            <option value="1">Negar Permisos de Administrador</option>
            <?php }else{ ?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['is_admin'];?>
">Negar Permisos de Administrador</option>
            <option value="0">Conceder Permisos de Administrador</option>
            <?php }?>
          </select>
          <?php }?>
          </div>
          <div class="col-md-12"><p><br>Descripción:</p><textarea type="text" class="form-control" id="upd_descripcion_p" name="upd_descripcion_p" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['descripcion'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['descripcion'];?>
</textarea></div>
          <div class="col-md-6"><p><br>Actividad:</p>
          <select id="upd_id_act_p" name="upd_id_act_p" class="form-control">
            <option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_act'];?>
">Elegir Actividad</option>
              <?php  $_smarty_tpl->tpl_vars['actividad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actividad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['actividad']->key => $_smarty_tpl->tpl_vars['actividad']->value){
$_smarty_tpl->tpl_vars['actividad']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['actividad']->value['id']!=1){?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
</option>
              <?php }?>
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