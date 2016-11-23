<h3>Tu opinión nos importa!</h3>
<div class="col-md-12 text-center">
{foreach $comentarios as $dato}
<div style="border: 0.5px solid #6142f4; border-radius: 20px; width: 20%;">
	<h3><b>{$dato.apyno}</b> comentó sobre {$dato.nombre}</h3>
	<h4><b>{$dato.comentario}</b></h4> 
	{for $i = $dato.puntaje; $i >= 1; $i--}<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> {/for}<br>	
</div>	
 {/foreach}
</div>