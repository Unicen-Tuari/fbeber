{if $profeact == NULL}
{foreach $actividad as $act}
	<h3>Próximamente habrá info sobre {$act.nombre}</h3>
{/foreach}

{else}
	{foreach $actividad as $act}
	<h4>Profesores de {$act.nombre}</h4>
	{/foreach}
			{foreach $profeact as $profes}

	<table class="table text-left">
		<tr>
		<td><img src="images/{$profes.foto}" alt="..." class="img-circle" width="70px" height="70px"> {$profes.nombre} {$profes.apellido}</td>
		<td>{$profes.horarios}</td>
		</tr>
		</table>
	{/foreach}
	
{/if}
      
