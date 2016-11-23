<h3>Tu opinión nos importa!</h3>
<div class="col-md-12 text-center" id="actualizar_com">
{foreach $comentarios as $dato}
<div class="col-md-2" style="border: 0.5px solid #6142f4; border-radius: 20px; margin: 20px;">
	<h3><b>{$dato.apyno}</b> comentó sobre {$dato.nombre}</h3>
	<h4><b>{$dato.comentario}</b></h4> 
	{for $i = $dato.puntaje; $i >= 1; $i--}<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> {/for}<br>	
</div>	
 {/foreach}
</div>

