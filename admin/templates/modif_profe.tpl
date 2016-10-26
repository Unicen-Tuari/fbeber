<div class="modal-header">
{foreach $profesor as $dato}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar los datos de {$dato.nombre}</h4>
      </div>
      <div class="modal-body">
        <form id="modifica_profesor" method="POST">
        
            <select id="upd_id_act_p" name="upd_id_act_p">
            <option  value="{$dato.id_act}">Ver todas</option>
              {foreach $actividades as $actividad}
              <option value="{$actividad.id}">{$actividad.nombre}</option>
              {/foreach}
            </select>
            <br>
            <input type="hidden" class="form-control" id="id_profe" name="id_profe" value="{$dato.id}">
            <input type="text" class="form-control" id="upd_horarios_p" name="upd_horarios_p" value="{$dato.horarios}">
            <input type="text" class="form-control" id="upd_nombre_p" name="upd_nombre_p" value="{$dato.nombre}">
            <input type="text" class="form-control" id="upd_apellido_p" name="upd_apellido_p" value="{$dato.apellido}">
            <input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="{$dato.dni}">
            <input type="text" class="form-control" id="upd_descripcion_p" name="upd_descripcion_p" value="{$dato.descripcion}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a class="btn btn-info" href="#" onclick="modProfe();" aria-hidden="true" data-dismiss="modal">Modificar</a>
        </form>
        {/foreach}
      </div>