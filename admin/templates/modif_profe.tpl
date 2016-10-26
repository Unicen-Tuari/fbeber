<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar los datos de {$profesor.nombre}</h4>
      </div>
      <div class="modal-body">
        <form id="modifica_profesor" method="POST">
        <img id="img_destino" class="img-circle zoom" width="80px" height="80px" src="../images/{$profesor.foto}"><input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple /><br>
            <select id="upd_id_act_p" name="upd_id_act_p">
              {foreach $actividades as $actividad}
              <option value="{$actividad.id}">{$actividad.nombre}</option>
              {/foreach}
            </select>
            <br>
            <input type="text" class="form-control" id="upd_horarios_p" name="upd_horarios_p" value="{$profesor.horarios}">
            <input type="text" class="form-control" id="upd_nombre_p" name="upd_nombre_p" value="{$profesor.nombre}">
            <input type="text" class="form-control" id="upd_apellido_p" name="upd_apellido_p" value="{$profesor.apellido}">
            <input type="text" class="form-control" id="upd_dni_p" name="upd_dni_p" value="{$profesor.dni}">
            <input type="text" class="form-control" id="upd_foto_p" name="upd_foto_p" value="{$profesor.foto}">
            <input type="text" class="form-control" id="upd_descripcion_p" name="upd_descripcion_p" value="{$profesor.descripcion}">
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <input type="button" id="btn_mod_profe" value="modificar">
        </form>
      </div>