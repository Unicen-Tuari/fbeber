<div class="col-md-12">
    
    <h1>Actividades</h1>
    <br>
    <div class="col-md-12 text-center">
      <button id="agregar_actividad" class="btn btn-success" data-toggle="modal" data-target="#agregarActividad">Agregar Actividad</button><br><br>
    </div>

    <!--todas las actividades-->

    <table class="table table-striped">
      <tr>
        <td><b>FOTOS</b></td>
        <td><b>ID</b></td>
        <td><b>NOMBRE</b></td>
        <td><b>DESCRIPCIÓN</b></td>
        <td><b>INSCRIPTOS</b></td>
        <td><b>COMENTARIOS</b></td>
        <td><b>MODIFICAR</b></td>
        <td><b>ELIMINAR</b></td>
      </tr>

      {foreach $actividades as $actividad}
      {if $actividad.id != 1} 
        <tr>
          <td><button class="btn btn-default" onClick = "imagesAct({$actividad.id});" type="button" data-toggle="modal" data-target="#mostrarImages"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
          <td>{$actividad.id}</td>
          <td class="text-uppercase">{$actividad.nombre}</td>
          <td class="text-capitalize">{$actividad.descripcion}</td>
          
          <td></td><!--consulta de usuarios inscriptos-->
         
          <td><button class="btn btn-warning" onClick = "cargaComentarios({$actividad.id});" type="button" data-toggle="modal" data-target="#comAct"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></button></td><!--consulta de comentarios y puntuaciones-->
          <td><button class="btn btn-info" onClick = "infoActividad({$actividad.id});" type="button" data-toggle="modal" data-target="#modificarActividad"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></td>
          <td><button class="btn btn-danger" onClick = "infoProfeAct({$actividad.id});" type="button" data-toggle="modal" data-target="#borrarActividad"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
        </tr>
      {/if} 
      {/foreach}
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
  <form id="add_actividad" action="" method="POST" enctype="multipart/form-data">
    <div class="col-md-12 text-center"><p>Seleccione imagen a modo de ilustración</p>
      <input type="file" name="imagesToUpload[]" id="imagesToUpload" class="form-control" multiple/>
    </div>
    <p><br>Nombre de la actividad</p>
      <input type="text" class="form-control" id="new_nombre_a" name="new_nombre_a"><br>
    <p><br>Realice una breve descripción de la actividad</p>
      <textarea type="text" class="form-control" id="new_descripcion_a" name="new_descripcion_a" value="Descripcion"></textarea><br>         
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="submit"  id="addBtn" class="btn btn-success" aria-hidden="true" data-dismiss="modal">Agregar</button>
</form>
</div>
</div>
</div>
</div>

<!--borrar actividad-->
<div id="borrarActividad" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoProfeAct" class="modal-content">
</div>
</div>
</div>

<!--mostrar imagenes por actividad-->
<div id="mostrarImages" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="imagesActividad" class="modal-content">
<h3>esto sii lo muestra</h3>
</div>
</div>
</div>

<!--Modificar Actividad-->
<div id="modificarActividad" class="modal fade" id="inscripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div id="infoActividad" class="modal-content">
</div>
</div>
</div>

<!--Comentarios Actividad-->
<div id="comAct" class="modal fade" id="inscripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div id="comentarios" class="modal-content">
</div>
</div>
</div>

