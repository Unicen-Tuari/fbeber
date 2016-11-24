<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3>Imágenes</h3>
</div>

<div  class="modal-body">
<input type="file" name="imagesToUpload[]" class="form-control" >
{if $imagesact == null}
<h1>No existen imagenes en esta actividad</h1>
{else}
{foreach $imagesact as $img}
<input type="hidden" name="id_act" id="id_act" value="{$img.id_act}">
<img src="../images/{$img.foto}" width="100px" height="100px;" class="zoom" style="margin: 2px">
<button class="btn btn-danger" onClick = "borraImagen({$img.id});" type="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
{/foreach}
{/if}
</div>

<div class="modal-footer text-center">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>

