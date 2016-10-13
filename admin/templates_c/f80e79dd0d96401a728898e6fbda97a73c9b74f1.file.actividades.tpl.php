<?php /* Smarty version Smarty-3.1.14, created on 2016-10-13 01:46:32
         compiled from ".\templates\actividades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2498057f6d8c83aef81-87553217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80e79dd0d96401a728898e6fbda97a73c9b74f1' => 
    array (
      0 => '.\\templates\\actividades.tpl',
      1 => 1476315972,
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
    'actividades' => 0,
    'actividad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f6d8c8750b51_81908823')) {function content_57f6d8c8750b51_81908823($_smarty_tpl) {?><div class="col-md-12">
    
    <h1>Actividades</h1>
    <br>
    <div class="col-md-12 text-center">
      <button class="btn btn-success" data-toggle="modal" data-target="#agregarActividad">Agregar Actividad</button><br><br>
    </div>


    <!--todas las actividades-->

    <table class="table table-striped">
      <tr>
        <td><b>FOTO</b></td>
        <td><b>ID</b></td>
        <td><b>NOMBRE</b></td>
        <td><b>DESCRIPCIÓN</b></td>
        <td><b>MODIFICAR</b></td>
        <td><b>ELIMINAR</b></td>
      </tr>

      <?php  $_smarty_tpl->tpl_vars['actividad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actividad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['actividad']->key => $_smarty_tpl->tpl_vars['actividad']->value){
$_smarty_tpl->tpl_vars['actividad']->_loop = true;
?> 
        <tr>
          <td><img src="../images/actividades/<?php echo $_smarty_tpl->tpl_vars['actividad']->value['foto'];?>
" alt="..." class="img-circle" width="50px" height="50px"></td>
          <td><?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['actividad']->value['descripcion'];?>
</td>
          <td><a class="glyphicon glyphicon-refresh zoom" data-toggle="modal" data-target="#modificarActividad"></a></td>
          <td><a class="glyphicon glyphicon-trash zoom" href="index.php?action=borrar_actividad&id_act=<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
"></a></td>
        </tr>  
      <?php } ?>
    </table>       
</div>

<!--MODALs ABM-->
<!--Agregar Actividad-->
<div id="agregarActividad" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="myModalLabel">Agregar Nueva Actividad</h4>
</div>
<div class="modal-body">
<form action="index.php?action=agregar_actividad" method="POST" enctype="multipart/form-data">
    <p>Imagen a modo de ilustración</p>
      <input type="text" name="new_foto_act" id="new_foto_act"><br>
    <p>Nombre de la actividad</p>
      <input type="text" class="form-control" id="new_nombre_act" name="new_nombre_act"><br>
    <p>Realice una breve descripción de la actividad</p>
      <textarea type="text" class="form-control" id="new_descripcion_act" name="new_descripcion_act" value="Descripcion"></textarea><br>         
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="submit" class="btn btn-success">Agregar</button>
</form>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 

<!--borrar actividad-->
<div id="eliminarActividad" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
  <h3>¿Seguro que desea eliminar esta actividad?</h3>
  <h4><?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
</h4>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <a type="button" class="btn btn-danger" href="index.php?action=borrar_actividad&id_act=<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
">Eliminar</a>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modificar Actividad-->
<div id="modificarActividad" class="modal fade" id="inscripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="myModalLabel">Modificar los datos de <?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
</h4>
</div>
<div class="modal-body">
<form action="index.php?action=modificar_actividad&id_act=<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
" method="POST" enctype="multipart/form-data">
   <input type="text" class="form-control" id="upd_foto_a" name="upd_foto_a" value="<?php echo $_smarty_tpl->tpl_vars['actividad']->value['foto'];?>
">
  <input type="text" class="form-control" id="upd_nombre_a" name="upd_nombre_a" value="<?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
">
  <input type="text" class="form-control" id="upd_descripcion_a" name="upd_descripcion_a" value="<?php echo $_smarty_tpl->tpl_vars['actividad']->value['descripcion'];?>
">
 
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="submit" class="btn btn-primary">Modificar</button>
</form>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }} ?>