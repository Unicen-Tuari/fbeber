<h1>Comentarios</h1>
{foreach $comentarios as $dato}
<div class="col-md-4">
<table class="table text-left">
<tr>
	<td><p><b>{$dato.nombre}</b></p>
    {for $i = $dato.puntaje; $i >= 1; $i--}<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> {/for}</td>
    <td class="text-center"><p>{$dato.comentario}</p></td>
    <td class="text-right"><button class="btn btn-default" onClick = "infoComentario({$dato.id});" type="button" data-toggle="modal" data-target="#borrarComentario"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
</tr>
</table>
</div>
 {/foreach}

<!--borrar comentario-->
<div id="borrarComentario" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoComentario" class="modal-content">
<h1>llega a aca</h1>
</div>
</div>
</div>