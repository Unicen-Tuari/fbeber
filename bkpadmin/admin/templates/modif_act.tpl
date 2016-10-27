<div class="modal-header">
{foreach $actividad as $act}
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="myModalLabel">Modificar los datos de {$act.nombre}</h4>
</div>
<div class="modal-body">
<form action="index.php?action=modificar_actividad&id_act={$act['id']}" method="POST" enctype="multipart/form-data">
   <img id="img_destino" class="img-circle zoom" width="80px" height="80px" src="../images/{$act.foto}"><input type="file" name="imagesToUpload[]" id="imagesToUpload"/><br>
  <input type="text" class="form-control" id="upd_nombre_a" name="upd_nombre_a" value="{$act.nombre}"><br>
  <input type="text" class="form-control" id="upd_descripcion_a" name="upd_descripcion_a" value="{$act.descripcion}"><br>
 
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="submit" class="btn btn-primary">Modificar</button>
</form>
{/foreach}
</div>