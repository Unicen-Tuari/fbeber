<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 01:47:25
         compiled from ".\templates\profesores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287605830eb1396dc96-08355820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b83c92ceb2dee7ba498a930a735c03eba341bc6' => 
    array (
      0 => '.\\templates\\profesores.tpl',
      1 => 1479602839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287605830eb1396dc96-08355820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5830eb13c9e3d9_35606125',
  'variables' => 
  array (
    'profesores' => 0,
    'profesor' => 0,
    'actividades' => 0,
    'actividad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5830eb13c9e3d9_35606125')) {function content_5830eb13c9e3d9_35606125($_smarty_tpl) {?>    
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
        <td><b>NOMBRE Y APELLIDO</b></td>
        <td><b>DNI</b></td>
        <td><b>DESCRIPCIÓN</b></td>
        <td><b>EMAIL</b></td>
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
        <?php if ($_smarty_tpl->tpl_vars['profesor']->value['is_admin']==1){?>
        <tr id="datosActividad">
          <td><img src="../images/<?php echo $_smarty_tpl->tpl_vars['profesor']->value['foto'];?>
" alt="..." class="img-circle zoom" width="50px" height="50px"></td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['apyno'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['dni'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['descripcion'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['email'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombreAct'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['horarios'];?>
</td>
          <td><button class="btn btn-info" onClick = "profeActividades(<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
);" type="button" data-toggle="modal" data-target="#modificarProfesor"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></td>
          <td><button class="btn btn-danger" onClick = "infoProfesor(<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
);" type="button" data-toggle="modal" data-target="#borrarProfesor"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['is_admin'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['pass'];?>
</td>
          </tr> 
        <?php }?> 
          <?php } ?>
    </table>  
    <br>

    <h1>Administradores</h1>
    <p>*para eliminar un administrador es necesario quitarle los permisos (modificar)</p>
    <table class="table table-striped">
      <tr>
        <td><b>FOTO</b></td>
        <td><b>NOMBRE Y APELLIDO</b></td>
        <td><b>DNI</b></td>
        <td><b>DESCRIPCIÓN</b></td>
        <td><b>EMAIL</b></td>
        <td><b>ACTIVIDAD</b></td>
        <td><b>DIAS Y HORARIOS</b></td>
        <td><b>MODIFICAR</b></td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['profesor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profesor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profesores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profesor']->key => $_smarty_tpl->tpl_vars['profesor']->value){
$_smarty_tpl->tpl_vars['profesor']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['profesor']->value['is_admin']==0){?>
        <tr id="datosActividad">
          <td><img src="../images/<?php echo $_smarty_tpl->tpl_vars['profesor']->value['foto'];?>
" alt="..." class="img-circle zoom" width="50px" height="50px"></td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['apyno'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['dni'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['descripcion'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['email'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombreAct'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['horarios'];?>
</td>
          <td><button class="btn btn-info" onClick = "profeActividades(<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
);" type="button" data-toggle="modal" data-target="#modificarProfesor"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['profesor']->value['is_admin'];?>
</td>

        </tr> 
        <?php }?> 
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
              <div class="col-md-12 text-center"><p>Seleccione foto de perfil:</p>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" class="form-control"/><br>
              </div>
              <div class="col-md-6"><p>Nombre y Apellido:</p><input type="text" id="new_apyno_p" name="new_apyno_p" class="form-control"></div>              
              <div class="col-md-6"><p>DNI:</p><input type="text" id="new_dni_p" name="new_dni_p" class="form-control"></div>
              <div class="col-md-6"><p><br>Correo Electrónico:</p><input type="text" id="new_email_p" name="new_email_p" class="form-control"></div>
              <div class="col-md-6"><p><br>Contraseña:</p><input type="password" id="new_pass_p" name="new_pass_p" class="form-control"></div>
              <div class="col-md-12"><br><p>Descripción breve del profesor:</p><textarea id="new_descripcion_p" name="new_descripcion_p" class="form-control"></textarea><br><br></div>
              <h4>Datos de la actividad</h4>
              <div class="col-md-6"><p>Seleccione la actividad:</p></div>
              <div class="col-md-6"><select id="new_id_act_p" name="new_id_act_p" class="form-control">
            <option>Ver todas</option>
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