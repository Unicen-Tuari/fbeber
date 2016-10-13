
    <div class="col-md-12">
    <h1>Profesores</h1>
    <br>
      <div class="col-md-2 text-left"><button class="btn btn-success" data-toggle="modal" data-target="#agregarProfesor">Agregar Profesor</button>
      </div>
      <div class="col-md-4 text-right"><h4>Ver profesores por actividad:</h4></div>
      <div class="col-md-2">
        <select class="form-control">
          <option>Todas</option>
          {foreach $actividades as $actividad}
            <option value="{$actividad.id}">{$actividad.nombre}</option>
          {/foreach}
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
        {foreach $profesores as $profesor}
        <tr id="datosActividad">
          <td><img src="../images/perfiles/{$profesor.foto}" alt="..." class="img-circle zoom" width="50px" height="50px"></td>
          <td>{$profesor.id}</td>
          <td>{$profesor.apellido}</td>
          <td>{$profesor.nombre}</td>
          <td>{$profesor.dni}</td>
          <td>{$profesor.descripcion}</td>
          <td>{$profesor.nombreAct}</td>
          <td><a class="glyphicon glyphicon-refresh zoom" data-toggle="modal" data-target="#modificarProfesor"></a></td>
          <td><a a type="button" class="glyphicon glyphicon-trash zoom" href="index.php?action=borrar_profesor&id_profe={$profesor['id']}"></a></td>
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
      <p>Seleccione la actividad que dictará el nuevo profesor: 
      <select id="new_id_act" name="new_id_act" class="form-control">
          {foreach $actividades as $actividad}
          <option value="{$actividad.id}">{$actividad.nombre}</option>
          {/foreach}
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
        <h3>¿Seguro que desea eliminar a {$profesor.nombre}?</h3>
        <h4>AVISO: Si elimina a {$profesor.apellido} {$profesor.nombre}, también eliminar. todas las actividades que realiza</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-danger" href="index.php?action=borrar_profesor&id_profe={$profesor['id']}">Eliminar</a>
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
        <h4 class="modal-title" id="myModalLabel">Modificar los datos de {$profesor.nombre}</h4>
      </div>
      <div class="modal-body">
        <form action="index.php?action=modificar_profesor&id_profe={$profesor['id']}" method="POST" enctype="multipart/form-data">
            <select id="upd_id_act" name="upd_id_act">
              {foreach $actividades as $actividad}
              <option value="{$actividad.id}">{$actividad.nombre}</option>
              {/foreach}
            </select>
            <input type="text" class="form-control" id="upd_nombre_p" name="upd_nombre_p" value="{$profesor.nombre}">
            <input type="text" class="form-control" id="upd_apellido_p" name="upd_apellido_p" value="{$profesor.apellido}">
            <input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="{$profesor.dni}">
            <input type="text" class="form-control" id="upd_foto_p" name="upd_foto_p" value="{$profesor.foto}">
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
