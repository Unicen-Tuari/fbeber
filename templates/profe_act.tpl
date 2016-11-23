{if $profeact == NULL}
<h3>Próximamente habrá info sobre {$actividad[0].nombre}</h3>

{else}
<h4>Profesores de {$actividad[0].nombre}</h4>
{foreach $profeact as $profes}

<table class="table text-left">
<tr>
	<td><img src="images/{$profes.foto}" alt="..." class="img-circle" width="70px" height="70px"> {$profes.apyno}</td>
	<td>{$profes.horarios}</td>
	<td class="text-center">
  {if !isset($usuario)}
	<form id="inscripcion" method="POST" enctype="multipart/form-data">
    <input type="hidden" class="form-control" id="new_idProfe_i" name="new_idProfe_i" value="{$profes.id}">
    <input type="hidden" class="form-control" id="new_idUser_i" name="new_idUser_i" value="{$usuario.id}">
    <a class="btn btn-success" href="#" onclick="agregaInscripcion()" aria-hidden="true" data-dismiss="modal">Inscribirme</a>
  </form>
  {else}<a href="login.php"><span class="label label-warning">Iniciar Sesión / Registrarse</span></a>
  {/if}
    </td>
</tr>
</table>
{/foreach}
	
{/if}
      
