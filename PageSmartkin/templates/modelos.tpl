<h3>Modelos</h3>

		{foreach $modelos as $dato}
			<img data-toggle="modal" data-target="#myModal" class="img-hover zoom" src="./images/catalogo/{$dato.img_modelo}" onClick = "getDataModelos({$dato.id_modelo});" alt="{$dato.nombre_modelo}" width="140px" height="140px">
		{/foreach}

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
      </div>

      <div class="modal-body text-center">
      <h3>Muestras de Dispositivos</h3>
        {foreach $modelos as $dato}
  				<img src="./images/catalogo/{$dato.img_dispositivo}" width="60px" class="zoom">
    		{/foreach}
        <br><br><br>
        <div class="input-group">
          <span class="input-group-addon">Nombre</span>
          <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Correo Electronico</span>
          <input type="text" class="form-control" placeholder="email">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Consulta</span>
          <input type="text" class="form-control" placeholder="Detalle dispositivo donde desea aplicar el skins">
        </div>
        <button type="submit" class="btn btn-default">Enviar consulta</button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>




 
	


	