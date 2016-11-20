{if $profeact == NULL}
<h3>Próximamente habrá info sobre {$actividad[0].nombre}</h3>

{else}
<h4>Profesores de {$actividad[0].nombre}</h4>
{foreach $profeact as $profes}

<table class="table text-left">
<tr>
	<td><img src="images/{$profes.foto}" alt="..." class="img-circle" width="70px" height="70px"> {$profes.apyno}</td>
	<td>{$profes.horarios}</td>
	<td class="text-right"><button id="id_actividad" onClick = "cargaProfesores({$actividad['id']});" class="btn btn-info" type="button" data-toggle="modal" data-target="#horarios">Inscribirme</button>
    </td>
</tr>
</table>
{/foreach}
	
{/if}
      
