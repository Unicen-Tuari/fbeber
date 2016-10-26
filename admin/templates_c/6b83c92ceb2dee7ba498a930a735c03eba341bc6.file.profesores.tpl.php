<?php /* Smarty version Smarty-3.1.14, created on 2016-10-27 01:38:35
         compiled from ".\templates\profesores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287357f8429a92a6d4-97294037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b83c92ceb2dee7ba498a930a735c03eba341bc6' => 
    array (
      0 => '.\\templates\\profesores.tpl',
      1 => 1477525111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287357f8429a92a6d4-97294037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f8429ab93a62_13096802',
  'variables' => 
  array (
    'profesores' => 0,
    'profesor' => 0,
    'actividades' => 0,
    'actividad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f8429ab93a62_13096802')) {function content_57f8429ab93a62_13096802($_smarty_tpl) {?>    
    <div class="col-md-12">
    <h1>Profesores</h1>
    <br>
      <div class="col-md-12 text-center"><button class="btn btn-success" data-toggle="modal" data-target="#agregarProfesor">Agregar Profesor</button>
      </div>    
    </div>

    <div class="col-md-12">
<br>
    <!--todas las actividades-->
    <table class="table table-striped">
      <tr>
        <td><b>FOTO</b></td>
        <td><b>ID</b></td>
        <td><b>APELLIDO</b></td>
        <td><b>NOMBRE</b></td>
        <td><b>DNI</b></td>
        <td><b>DESCRIPCIÓN</b></td>
        <td><b>ACTIVIDAD</b></td>
        <td><b>DIAS Y HORARIOS</b></td>
        <td><b>MODIFICAR</b></td>
        <td><b>ELIMINAR</b></td>
      </tr>
        <?php  $_smarty_tpl->tpl_vars['profesor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profesor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profesores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profesor']->key => $_smarty_tpl->tpl_vars['profesor']->value){
$_smarty_tpl->tpl_vars['profesor']->_loop = true;
?>
        <tr id="datosActividad">
          <td><img src="../images/<?php echo $_smarty_tpl->tpl_vars['profesor']->value['foto'];?>
" alt="..." class="img-circle zoom" width="50px" height="50px"></td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['apellido'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombre'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['dni'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['descripcion'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombreAct'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['horarios'];?>
</td>
          <td><button class="btn btn-info" onClick = "profeActividades(<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
);" type="button" data-toggle="modal" data-target="#modificarProfesor"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></td>
          <td><button class="btn btn-danger" onClick = "infoProfesor(<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
);" type="button" data-toggle="modal" data-target="#borrarProfesor"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
          </tr>  
          <?php } ?>
    </table>       
</div>

<!--MODALs ABM-->
<!--Agregar profesor-->
<div id="agregarProfesor" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3>Agregar Profesor</h3>
      
          <div  class="col-md-12 modal-body">
            <form id="agregar_profesor">
              <h4>Datos personales</h4>
              <div class="col-md-4"><p>Nombre:</p><input type="text" id="new_nombre_p" name="new_nombre_p" class="form-control"></div>
              <div class="col-md-4"><p>Apellido:</p><input type="text" id="new_apellido_p" name="new_apellido_p" class="form-control"></div>
              <div class="col-md-4"><p>DNI:</p><input type="text" id="new_dni_p" name="new_dni_p" class="form-control"></div>
              <div class="col-md-12"><br><p>Descripción breve del profesor:</p><textarea id="new_descripcion_p" name="new_descripcion_p" class="form-control"></textarea><br><br></div>
              <h4>Datos de la actividad</h4>
              <div class="col-md-6"><p>Seleccione la actividad:</p></div>
              <div class="col-md-6"><select id="new_id_act_p" name="new_id_act_p">
            <option>Ver todas</option>
              <?php  $_smarty_tpl->tpl_vars['actividad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actividad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['actividad']->key => $_smarty_tpl->tpl_vars['actividad']->value){
$_smarty_tpl->tpl_vars['actividad']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
</option>
              <?php } ?>
            </select></div>
              <div class="col-md-12"><p>Detalle los días y horarios que dictará la actividad previamente seleccionada:</p><input type="text" id="new_horarios_p" name="new_horarios_p" class="form-control"></div>

            </form>
      </div>
       <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <a class="btn btn-success" href="#" onclick="agregaProfe()" aria-hidden="true" data-dismiss="modal">Agregar</a>
  </div>
    </div>
  </div>
</div></div>
 

<!--borrar profesor-->
<div id="borrarProfesor" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoProfesor" class="modal-content">
</div>
</div>
</div>

<!--Modificar profesor-->
<div id="modificarProfesor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div id="infoProfeActividades" class="modal-content">
<h3>okey</h3>
</div>
</div>
</div>

<?php }} ?>