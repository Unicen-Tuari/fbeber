{include file = "header.tpl"}
<div class="col-md-12">
    
    
    <div class="col-md-12">
    <h1>Actividades</h1>
    <br>
    <!--todas las actividades-->
    <p>***Traidas de la base de datos***</p>
    {foreach $actividades as $actividad}
    <div class="col-md-3">
        <div class="promocion4">
          <img src="images/actividades/fitness.jpg" alt="..." class="img-circle" width="140px" height="140px">
          <h3>{$actividad.nombre}</h3>
          <h4>{$actividad.diasHorarios}</h4>
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#inscripcion">Inscribirse</button>
          <p>{$actividad.descripcion}</p>
        </div>
      </div>
    {/foreach}
    <div class="col-md-12"><p>***fin de base de datos***</p></div>
      <div class="col-md-3">
        <div class="promocion3">
          <h3>Indoor</h3>
          <h4>Días y horarios</h4>
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#inscripcion">Inscribirse</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="promocion3">
          <h3>Musculación</h3>
          <h4>Días y horarios</h4>
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#inscripcion">Inscribirse</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="promocion3">
          <h3>Zumba</h3>
          <h4>Días y horarios</h4>
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#inscripcion">Inscribirse</button>          
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div id="infoActZumba">
          <a id="infoZumba">Ver más</a>
        </div> 
        </div>
      </div>
      <div class="col-md-3">
        <div class="promocion3">
          <h3>Rutinas</h3>
          <h4>Días y horarios</h4>
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#inscripcion">Inscribirse</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div id="infoActRutina">
          <a id="infoRutina">Ver más</a>
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