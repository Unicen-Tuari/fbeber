{include file = "header.tpl"}
<div class="col-md-12">
    
    <div class="col-md-12">
    <h1>Actividades</h1>
    <br>
    <div class="col-md-12">
      <div class="col-md-6 text-right"><h4>Ver actividades de:</h4></div>
      <div class="col-md-2">
        <select class="form-control">
          <option>Todas</option>
        {foreach $profesores as $profesor}
          <option value="{$profesor.id}">{$profesor.nombre}</option>
          {/foreach}
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
          {foreach $actividades as $actividad}
        <tr id="datosActividad">
          <td><img src="../images/actividades/fitness.jpg" alt="..." class="img-circle" width="50px" height="50px"></td>
          <td>{$actividad.id}</td>
          <td>{$actividad.nombre}</td>
          <td>{$actividad.profesor}</td>
          <td>{$actividad.descripcion}</td>
          <td>{$actividad.diasHorarios}</td>
          <td>precio</td>
          <td><a class="glyphicon glyphicon-refresh zoom"></a></td>
          <td><a class="glyphicon glyphicon-remove zoom"></a></td>
        </tr>  
          {/foreach}
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

{include file = "footer.tpl"}