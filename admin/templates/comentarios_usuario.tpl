<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Comentarios de {$usuario[0].apyno}</h3>
{if $comusuario == NULL}
<h4>No hay</h4>
{else}

{foreach $comusuario as $dato}

<table class="table">
<tr>
	<td><b>{$dato.nombre}</b></td>
    <td class="text-center"><p>{$dato.comentario}</p></td>
    <td class="text-right">{for $i = $dato.puntaje; $i >= 1; $i--}<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> {/for}</td>
    <td class="text-right"><button type="button" class="label label-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
</tr>
</table>
{/foreach}
{/if}
      