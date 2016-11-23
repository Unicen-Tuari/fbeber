{if $comact == NULL}
<h3>No existen comentarios</h3>
{else}

<h3>{$comact[0].nombre}</h3>

{foreach $comact as $dato}

<div class="col-md-6" style="padding: 2px;">
<div class="col-md-12 text-center" style="border: 0.5px solid #6142f4; border-radius: 20px;" onload="recargarComentarios()" >
	<h3><b>{$dato.comentario}</b></h3> 
	{for $i = $dato.puntaje; $i >= 1; $i--}<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> {/for}<br>	
	{$dato.apyno}
</div>	
</div>
{/foreach}

{/if}
      
