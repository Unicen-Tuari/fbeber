{if $profeact == NULL}
	<h3>Próximamente habrá info sobre {$actividad[0].nombre}</h3>

{else}
	
	<h4>Profesores de {$actividad[0].nombre}</h4>

			{foreach $profeact as $profes}

	<table class="table text-left">
		<tr>
		<td><img src="images/{$profes.foto}" alt="..." class="img-circle" width="70px" height="70px"> {$profes.nombre} {$profes.apellido}</td>
		<td>{$profes.horarios}</td>
		</tr>
		</table>
	{/foreach}
	
{/if}
      
