<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3>Imágenes</h3>
</div>

<div  class="modal-body">
{if $imagesact == null}
<h1>No existen imagenes en esta actividad</h1>
{else}
{foreach $imagesact as $img}
<img src="../images/{$img.foto}" width="100px" height="100px;" class="zoom" style="margin: 2px">
<a class="btn btn-danger" href="#" onclick="borraImgAct('{$img.id}')" aria-hidden="true" data-dismiss="modal">Eliminar</a>{/foreach}
{/if}
</div>

  <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div>

