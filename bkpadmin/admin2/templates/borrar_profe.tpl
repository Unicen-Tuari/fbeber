  <div class="modal-body">
        <h3>¿Seguro que desea eliminar a {$profesor.nombre}?</h3>
        <h4>AVISO: Si elimina a {$profesor.apellido} {$profesor.nombre}, también eliminar. todas las actividades que realiza</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-danger" href="index.php?action=borrar_profesor&id_profe={$profesor['id']}">Eliminar</a>
      </div>
