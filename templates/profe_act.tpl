{if $profeact == NULL}
{foreach $actividad as $act}
	<h4>Próximamente habrá info sobre {$act.nombre}</h4>
{/foreach}
{else}
	{foreach $actividad as $act}
	<h4> {$act.nombre}</h4>
{/foreach}
	{foreach $profeact as $profes}
		<div>
		<img src="images/perfiles/{$profes.foto}" alt="..." class="img-circle" width="70px" height="70px"><br>{$profes.nombre} {$profes.apellido} - Profesor de {$profes.nombreAct}<br>{$profes.horarios}
		</div>
		<br>
	{/foreach}
{/if}
      
