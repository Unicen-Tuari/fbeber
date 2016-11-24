<div class="modal-header">
{foreach $profesor as $dato}
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modificar los datos de {$dato.apyno}</h4>
</div>

      <div class="col-md-12 modal-body">
        <form id="modifica_profesor" method="POST">         
          <input type="hidden" class="form-control" id="id_profe" name="id_profe" value="{$dato.id}">
          <div class="col-md-7"><p><br>Nombre y Apellido:</p><input type="text" class="form-control" id="upd_apyno_p" name="upd_apyno_p" value="{$dato.apyno}"></div>
          <div class="col-md-5"><p><br>DNI:</p><input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="{$dato.dni}"></div>
          <div class="col-md-6"><p><br>Correo Electrónico:</p><input type="text" class="form-control" id="upd_email_p" name="upd_email_p" value="{$dato.email}"></div>
          <div class="col-md-6"><p><br>Contraseña:</p><input type="text" class="form-control" id="upd_pass_p" name="upd_pass_p" value="{$dato.pass}"></div>
          <div class="col-md-12">
          <p><br>Permisos:</p>{if $dato.id == 1}No se pueden modificar los permisos de este admin
          {else}
          <select id="upd_permisos_p" name="upd_permisos_p" class="form-control text-center">
            {if $dato.is_admin == 0}
            <option value="{$dato.is_admin}">Conceder Permisos de Administrador</option>
            <option value="1">Negar Permisos de Administrador</option>
            {else}
            <option value="{$dato.is_admin}">Negar Permisos de Administrador</option>
            <option value="0">Conceder Permisos de Administrador</option>
            {/if}
          </select>
          {/if}
          </div>
          <div class="col-md-12"><p><br>Descripción:</p><textarea type="text" class="form-control" id="upd_descripcion_p" name="upd_descripcion_p" value="{$dato.descripcion}">{$dato.descripcion}</textarea></div>
          <div class="col-md-6"><p><br>Actividad:</p>
          <select id="upd_id_act_p" name="upd_id_act_p" class="form-control">
            <option value="{$dato.id_act}">Elegir Actividad</option>
              {foreach $actividades as $actividad}
              {if $actividad.id != 1}
              <option value="{$actividad.id}">{$actividad.nombre}</option>
              {/if}
              {/foreach}
            </select>
          </div>
          <div class="col-md-6"><p><br>Horarios:</p><input type="text" class="form-control" id="upd_horarios_p" name="upd_horarios_p" value="{$dato.horarios}"></div>
        </div> 
    
      

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<a class="btn btn-info" href="#" onclick="modProfe();" aria-hidden="true" data-dismiss="modal">Modificar</a>
{/foreach}
</div>
</form>