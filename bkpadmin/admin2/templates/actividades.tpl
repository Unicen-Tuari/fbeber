<div class="col-md-12">
    
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
<!--listado de todas las actividades-->
  {foreach $actividades as $actividad} 
    <tr>
      <td><img src="../images/{$actividad.foto}" alt="..." class="img-circle zoom" width="50px" height="50px"></td>
      <td>{$actividad.id}</td>
      <td>{$actividad.nombre}</td>
      <td>{$actividad.descripcion}</td>
      <td>
        <button class="btn btn-info" id="id_actividad" onClick = "infoActividad({$actividad['id']});" type="button" data-toggle="modal" data-target="#modificarActividad"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></td>
      <td>
        <button class="btn btn-danger" onClick = "cargaInfoAct({$actividad['id']});" type="button" data-toggle="modal" data-target="#confirmarAct"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
    </tr>  
  {/foreach} 
  </table>       
</div>
<!--fin del listado de todas las actividades-->

<!--modal de confirmacion borrar actividad falta que se vaya-->
<div class="modal fade" id="confirmarAct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div  id="tableActividad" class="modal-content">
</div>
</div>
</div>

<!--Modificar Actividad-->
<div id="modificarActividad" class="modal fade" id="inscripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div id="tableAct" class="modal-content">
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Agregar Actividad-->
<div id="agregarActividad" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="myModalLabel">Agregar Nueva Actividad</h4>
</div>
<div class="modal-body">
<form method="POST" enctype="multipart/form-data">
    <div class="col-md-12 text-center"><p>Seleccione imagen a modo de ilustración<br>
          <img id="img_destino" class="img-circle zoom" width="80px" height="80px" src="../images/actividadDefault.png" alt="Tu imagen"><input type="file" name="imagesToUpload[]" id="imagesToUpload"/></div>
    <p>Nombre de la actividad</p>
      <input type="text" class="form-control" id="new_nombre_act" name="new_nombre_act"><br>
    <p>Realice una breve descripción de la actividad</p>
      <textarea type="text" class="form-control" id="new_descripcion_act" name="new_descripcion_act" value="Descripcion"></textarea><br>         
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="submit" onClick = "agregarAct();" class="btn btn-success">Agregar</button>
</form>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->