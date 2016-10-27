<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{foreach $actividad as $act}
	<h4 class="modal-title" id="myModalLabel">Modificar los datos de {$act.nombre}</h4>
</div>

<div class="modal-body">
	
		<input type="text" id="id_act" name="id_act" value="{$act.id}" hidden="">
   		<img class="img-circle zoom" width="80px" height="80px" src="../images/{$act.foto}"><input type="file" name="imagesToUpload[]" id="imagesToUpload" value="{$act.foto}"/><br>
  		<input type="text" class="form-control" id="upd_nombre_a" name="upd_nombre_a" value="{$act.nombre}"><br>
  		<input type="text" class="form-control" id="upd_descripcion_a" name="upd_descripcion_a" value="{$act.descripcion}">
		</div>

<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
 	<button class="btn btn-danger" onClick = "modificarAct({$act['id']});" type="submit">SI</button>
{/foreach}

</div>