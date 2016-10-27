<div class="modal-header">

  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>

  <div  class="modal-body">
{if $imagesact == null}
<h1>no Existen imagenes en esta actividad</h1>
{else}
    {foreach $imagesact as $img}
    <img src="images/{$img.foto}" width="200px" class="zoom">
    {/foreach}
{/if}
  </div>

  <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div>

