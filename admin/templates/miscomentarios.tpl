<table class="table">
    {foreach $miscomentarios as $dato}
    <tr>
      <td><b>Actividad:{$dato.nombre}</b></td>
      <td class="text-left"><p>Comentario{$dato.comentario}</p></td>
      <td><b>{$dato.puntaje} </b><span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span></td>
      
      <td class="text-right"><button class="btn btn-default" onClick = "infoComentario({$dato.id});" type="button" data-toggle="modal" data-target="#borrarComentario"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
    </tr>
    {/foreach}
  </table>

  <!--borrar comentario-->
<div id="borrarComentario" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoComentario" class="modal-content">
<h1>llega a aca</h1>
</div>
</div>
</div>