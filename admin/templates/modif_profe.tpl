<div class="modal-header">
{foreach $profesor as $dato}
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modificar los datos de {$dato.nombre}</h4>
</div>

      <div class="col-md-12 modal-body">
        <form id="modifica_profesor" method="POST">
          <div class="col-md-12"><p>Cambie la foto de perfil</p>         
          <input type="file" name="imagesToUpload[]" id="imagesToUpload" class="form-control" value="{$dato.foto}"></div>
          <input type="hidden" class="form-control" id="id_profe" name="id_profe" value="{$dato.id}">
          <div class="col-md-4"><p><br>Nombre:</p><input type="text" class="form-control" id="upd_nombre_p" name="upd_nombre_p" value="{$dato.nombre}"></div>
          <div class="col-md-4"><p><br>Apellido:</p><input type="text" class="form-control" id="upd_apellido_p" name="upd_apellido_p" value="{$dato.apellido}"></div>
          <div class="col-md-4"><p><br>DNI:</p><input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="{$dato.dni}"></div>
          <div class="col-md-12"><p><br>Descripción:</p><textarea type="text" class="form-control" id="upd_descripcion_p" name="upd_descripcion_p" value="{$dato.descripcion}"></textarea></div>
          <div class="col-md-6"><p><br>Actividad:</p>
          <select id="upd_id_act_p" name="upd_id_act_p">
            <option  value="{$dato.id_act}">Ver todas</option>
              {foreach $actividades as $actividad}
              <option value="{$actividad.id}">{$actividad.nombre}</option>
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