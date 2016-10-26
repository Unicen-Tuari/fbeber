{include file ="header.tpl"}    
    
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
        {foreach $profesores as $profesor}
        <tr id="datosActividad">
          <td><img src="../images/{$profesor.foto}" alt="..." class="img-circle zoom" width="50px" height="50px"></td>
          <td>{$profesor.id}</td>
          <td>{$profesor.apellido}</td>
          <td>{$profesor.nombre}</td>
          <td>{$profesor.dni}</td>
          <td>{$profesor.descripcion}</td>
          <td>{$profesor.nombreAct}</td>
          <td>{$profesor.horarios}</td>
          <td><button class="btn btn-info" type="button" data-toggle="modal" data-target="#modificarProfesor"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></td>
          <td><button class="btn btn-danger" onClick = "infoProfesor({$profesor['id']});" type="button" data-toggle="modal" data-target="#borrarProfesor"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
          </tr>  
          {/foreach}
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
        <div class="col-md-12 text-center"><p>Foto de Perfil<br>
          <img id="img_destino" class="img-circle zoom" width="80px" height="80px" src="../images/perfilDefault.png" alt="Tu imagen"><input type="file" name="imagesToUpload[]" id="imagesToUpload"/></div>
      <p>Seleccione la actividad que dictará el nuevo profesor:</p> 
      <select id="new_id_act" name="new_id_act">
          {foreach $actividades as $actividad}
          <option value="{$actividad.id}">{$actividad.nombre}</option>
          {/foreach}
        </select>
      <br>
      <p>Detalle los días y los horarios:</p>
      <input type="text" class="form-control" id="new_horarios" name="new_horarios"></p><br>
          <p>Nombre:</p> 
          <input type="text" class="form-control" id="new_nombre_p" name="new_nombre_p"><br>
          <p>Apellido:
          <input type="text" class="form-control" id="new_apellido_p" name="new_apellido_p"><br>
           <p>DNI:</p>
          <input type="text" class="form-control" id="new_dni_p" name="new_dni_p"><br>
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
<div id="borrarProfesor" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="borraProfesor" class="modal-content">
</div>
</div>
</div>

<!--Modificar Actividad-->
<div id="modificarProfesor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div id="modificaProfesor" class="modal-content">
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar los datos de {$profesor.nombre}</h4>
      </div>
      <div class="modal-body">
        <form action="index.php?action=modificar_profesor&id_profe={$profesor['id']}" method="POST" enctype="multipart/form-data">
        <img id="img_destino" class="img-circle zoom" width="80px" height="80px" src="../images/{$profesor.foto}">
        <input type="file" name="imagesToUpload[]" id="imagesToUpload" value="{$profesor.foto}" /><br>
            <select id="upd_id_act" name="upd_id_act">
              {foreach $actividades as $actividad}
              <option value="{$actividad.id}">{$actividad.nombre}</option>
              {/foreach}
            </select>

            <input type="text" class="form-control" id="upd_horarios" name="upd_horarios" value="{$profesor.horarios}">
            <input type="text" class="form-control" id="upd_nombre_p" name="upd_nombre_p" value="{$profesor.nombre}">
            <input type="text" class="form-control" id="upd_apellido_p" name="upd_apellido_p" value="{$profesor.apellido}">
            <input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="{$profesor.dni}">
            
            <input type="text" class="form-control" id="upd_descripcion_p" name="upd_descripcion_p" value="{$profesor.descripcion}">
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
      </div>
</div>
</div>
</div>

{include file ="footer.tpl"}    
