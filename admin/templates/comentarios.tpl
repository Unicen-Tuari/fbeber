
<div class="col-md-12 text-center">
<h3>Tu opinión nos importa!</h3>

<div id="actualizar_com">
{foreach $comentarios as $dato}
<div class="col-md-3">

<div style="border: 0.5px solid #6142f4; border-radius: 20px; margin: 10px;">
	<h3><b>{$dato.apyno}</b> comentó sobre {$dato.nombre}</h3>
	<h4><b>{$dato.comentario}</b></h4> 
	{for $i = $dato.puntaje; $i >= 1; $i--}<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span> {/for}<br>	
</div>	</div>

 {/foreach}
 
</div>
</div>


