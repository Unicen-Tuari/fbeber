<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  
{foreach $comentario as $dato}
<h3>¿Está seguro que desea eliminar este comentario?</h3>
    
<div  class="modal-body">
  <table class="table text-left">
<tr>
    {for $i = $dato.puntaje; $i >= 1; $i--}<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> {/for}</td>
    <td class="text-center"><p>{$dato.comentario}</p></td>

</tr>
</table>
</div>

<div class="modal-footer text-center">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
  <a class="btn btn-danger" href="#" onclick="borraComentario('{$dato.id}')" aria-hidden="true" data-dismiss="modal">Eliminar</a>
</div>
{/foreach}
