{if $profeact == NULL}
<h3>Próximamente habrá info sobre {$actividad[0].nombre}</h3>

{else}
<h4>Profesores de {$actividad[0].nombre}</h4>
{foreach $profeact as $profes}

<table class="table text-left">
<tr>
	<td><img src="images/{$profes.foto}" alt="..." class="img-circle" width="70px" height="70px"> {$profes.apyno}</td>
	<td>{$profes.horarios}</td>
	<td class="text-right">
	<form id="inscripcion" method="POST" enctype="multipart/form-data">
    <input type="text" class="form-control" id="new_idProfe_i" name="new_idProfe_i" value="{$profes.id}">
    <select id="new_idUser_i" name="new_idUser_i">
      {foreach $usuarios as $user}
        <option value="{$user.id}">{$user.apyno}</option>
      {/foreach}
    </select>
    <div class="col-md-12">
    <div class="col-md-2 text-left"><a class="btn btn-success" href="#" onclick="agregaInscripcion()" aria-hidden="true" data-dismiss="modal">Listo</a>
  </form>
    </td>
</tr>
</table>
{/foreach}
	
{/if}
      
