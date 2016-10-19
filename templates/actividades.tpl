<div class="col-md-12">
    
    <div class="col-md-12">
    <h1>Actividades</h1>
    <br>
    <!--todas las actividades-->
    {foreach $actividades as $actividad}
    <div class="col-md-3">
        <div class="promocion3">
          <img src="images/{$actividad.foto}" alt="..." class="img-circle" width="100px" height="100px">
          <h3>{$actividad.nombre}</h3>
          <p>{$actividad.descripcion}</p>        
          <button class="btn btn-default" id="id_actividad" onClick = "cargaProfesores({$actividad['id']});" type="button" data-toggle="modal" data-target="#horarios"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Ver Días Horarios</button> <button class="btn btn-success" type="button" data-toggle="modal" data-target="#inscripcion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Inscribirse</button>
        </div>
      </div>
    {/foreach}  
    </div> 
</div>

<!-- Modal -->
<div class="modal fade" id="horarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4>Días y Horarios</h4>
        <div id="tableProfesores" class="modal-body"></div>
        
      </div>
    </div>
  </div>
</div>

<!--Formulario de inscripcion-->
<div class="modal fade" id="inscripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inscripción A FUTURO</h4>
      </div>
      <div class="modal-body">
      <h1>NO FUNCIONA AÚN! :)</h1>
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

