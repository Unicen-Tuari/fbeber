<?php /* Smarty version Smarty-3.1.14, created on 2016-10-07 20:29:04
         compiled from ".\templates\actividades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2498057f6d8c83aef81-87553217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80e79dd0d96401a728898e6fbda97a73c9b74f1' => 
    array (
      0 => '.\\templates\\actividades.tpl',
      1 => 1475864943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2498057f6d8c83aef81-87553217',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f6d8c8750b51_81908823',
  'variables' => 
  array (
    'profesores' => 0,
    'profesor' => 0,
    'actividades' => 0,
    'actividad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f6d8c8750b51_81908823')) {function content_57f6d8c8750b51_81908823($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="col-md-12">
    
    <div class="col-md-12">
    <h1>Actividades</h1>
    <br>
    <div class="col-md-12">
      <div class="col-md-6 text-right"><h4>Ver actividades de:</h4></div>
      <div class="col-md-2">
        <select class="form-control">
          <option>Todas</option>
        <?php  $_smarty_tpl->tpl_vars['profesor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profesor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profesores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profesor']->key => $_smarty_tpl->tpl_vars['profesor']->value){
$_smarty_tpl->tpl_vars['profesor']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombre'];?>
</option>
          <?php } ?>
        </select>
      </div>

    </div>
    <!--todas las actividades-->
    <table class="table table-striped">
      <tr>
        <td><b>FOTO</b></td>
        <td><b>ID</b></td>
        <td><b>NOMBRE</b></td>
        <td><b>PROFESOR</b></td>
        <td><b>DESCRIPCIÓN</b></td>
        <td><b>DÍAS Y HORARIOS</b></td>
        <td><b>PRECIO MENSUAL</b></td>
        <td><b>MODIFICAR</b></td>
        <td><b>ELIMINAR</b></td>
      </tr>
          <?php  $_smarty_tpl->tpl_vars['actividad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actividad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['actividad']->key => $_smarty_tpl->tpl_vars['actividad']->value){
$_smarty_tpl->tpl_vars['actividad']->_loop = true;
?>
        <tr id="datosActividad">
          <td><img src="../images/actividades/fitness.jpg" alt="..." class="img-circle" width="50px" height="50px"></td>
          <td><?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['actividad']->value['profesor'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['actividad']->value['descripcion'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['actividad']->value['diasHorarios'];?>
</td>
          <td>precio</td>
          <td><a class="glyphicon glyphicon-refresh zoom"></a></td>
          <td><a class="glyphicon glyphicon-remove zoom"></a></td>
        </tr>  
          <?php } ?>
    </table>       
</div>

<!--Formulario de inscripcion-->
<div class="modal fade" id="inscripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inscripción a Rutinas</h4>
      </div>
      <div class="modal-body">
        <h5>Complete el siguiente formulario</h5>
        <input id="nombre-user" class="form-control" type="text" maxlength="20" placeholder="Nombre y Apellido"><br>
        <input id="edad-user" class="form-control" type="text" maxlength="200" placeholder="Edad"><br>
        <input id="telefono-user" class="form-control" type="text" maxlength="200" placeholder="Teléfono"><br>
        <input id="email-user" class="form-control" type="text" maxlength="200" placeholder="Correo Electrónico"><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button id="inscribirse" type="button" class="btn btn-success">Inscribirse</button>
      </div>
    </div>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>