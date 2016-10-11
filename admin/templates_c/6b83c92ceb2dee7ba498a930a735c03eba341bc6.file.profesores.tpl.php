<?php /* Smarty version Smarty-3.1.14, created on 2016-10-11 01:20:55
         compiled from ".\templates\profesores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287357f8429a92a6d4-97294037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b83c92ceb2dee7ba498a930a735c03eba341bc6' => 
    array (
      0 => '.\\templates\\profesores.tpl',
      1 => 1476141654,
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
    'actividades' => 0,
    'actividad' => 0,
    'profesores' => 0,
    'profesor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f8429ab93a62_13096802')) {function content_57f8429ab93a62_13096802($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    
    <div class="col-md-12">
    <h1>Profesores</h1>
    <br>
      <div class="col-md-2 text-left"><button class="btn btn-success" data-toggle="modal" data-target="#agregarProfesor">Agregar Profesor</button>
      </div>
      <div class="col-md-4 text-right"><h4>Ver profesores por actividad:</h4></div>
      <div class="col-md-2">
        <select class="form-control">
          <option>Todas</option>
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
        <td><b>MODIFICAR</b></td>
        <td><b>ELIMINAR</b></td>
      </tr>
        <?php  $_smarty_tpl->tpl_vars['profesor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profesor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profesores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profesor']->key => $_smarty_tpl->tpl_vars['profesor']->value){
$_smarty_tpl->tpl_vars['profesor']->_loop = true;
?>
        <tr id="datosActividad">
          <td><img src="../images/perfiles/<?php echo $_smarty_tpl->tpl_vars['profesor']->value['foto'];?>
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
          <td><a class="glyphicon glyphicon-refresh zoom" data-toggle="modal" data-target="#modificarProfesor"></a></td>
          <td><a a type="button" class="glyphicon glyphicon-trash zoom" href="index.php?action=borrar_profesor&id_profe=<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
"></a></td>
        </tr>  
          <?php } ?>
    </table>       
</div>

<!--MODALs ABM-->
<!--Agregar Actividad-->
<div id="agregarProfesor" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Profesor</h4>
      </div>
      <div class="modal-body text-left">
        <form action="index.php?action=agregar_profesor" method="POST" enctype="multipart/form-data">
      <p>Seleccione la actividad que dictará el nuevo profesor: 
      <select id="new_id_act" name="new_id_act" class="form-control">
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
      </p><br>
        <p>Foto de Perfil
          <input type="text" class="form-control" id="new_foto_p" name="new_foto_p"></p><br>
          <p>Nombre: 
          <input type="text" class="form-control" id="new_nombre_p" name="new_nombre_p"></p><br>
          <p>Apellido:
          <input type="text" class="form-control" id="new_apellido_p" name="new_apellido_p"></p><br>
           <p>DNI:
          <input type="text" class="form-control" id="new_dni_p" name="new_dni_p"></p><br>
          <p>Realice una breve descripción sobre la capacitación del profesor</p>
          <textarea type="text" class="form-control" id="new_descripcion_p" name="new_descripcion_p"></textarea><br>
          
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>
 

<!--borrar actividad-->
<div id="eliminarProfesor" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h3>¿Seguro que desea eliminar a <?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombre'];?>
?</h3>
        <h4>AVISO: Si elimina a <?php echo $_smarty_tpl->tpl_vars['profesor']->value['apellido'];?>
 <?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombre'];?>
, también eliminar. todas las actividades que realiza</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-danger" href="index.php?action=borrar_profesor&id_profe=<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
">Eliminar</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modificar Actividad-->
<div id="modificarProfesor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar los datos de <?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombre'];?>
</h4>
      </div>
      <div class="modal-body">
        <form action="index.php?action=modificar_profesor&id_profe=<?php echo $_smarty_tpl->tpl_vars['profesor']->value['id'];?>
" method="POST" enctype="multipart/form-data">
            <select id="upd_id_act" name="upd_id_act">
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
            <input type="text" class="form-control" id="upd_nombre_p" name="upd_nombre_p" value="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombre'];?>
">
            <input type="text" class="form-control" id="upd_apellido_p" name="upd_apellido_p" value="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['apellido'];?>
">
            <input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['dni'];?>
">
            <input type="text" class="form-control" id="upd_foto_p" name="upd_foto_p" value="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['foto'];?>
">
            <input type="text" class="form-control" id="upd_descripcion_p" name="upd_descripcion_p" value="<?php echo $_smarty_tpl->tpl_vars['profesor']->value['descripcion'];?>
">
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>