{include file="header.tpl"}
<div class="col-md-12">
<h3 class="text-center">Listado de Usuarios</h3>
<br>

	<h4 class=" text-center">Usuarios Activos</h4>
	{foreach $usuarios as $usuario}			
	    {if !$usuario['bloqueado']}
	      	<img src=".{$usuario.img_user}" class="icon_user">
	      	{$usuario.email_user}
	        <a class="glyphicon glyphicon-ok" href="admin_usuarios.php?action=no_habilitar_usuario&id_user={$usuario['id_user']}"><button type="submit" class="btn btn-default">Bloquear</button></a>  <br>
	    {/if}
	{/foreach}



 	<h4 class="text-center">Usuarios Bloqueados</h4>   
	{foreach $usuarios as $usuario}			
    	{if $usuario['bloqueado']}

	      	<img src=".{$usuario.img_user}" class="icon_user">

            {$usuario.email_user}
          	<a class="glyphicon glyphicon-ok" href="admin_usuarios.php?action=habilitar_usuario&id_user={$usuario['id_user']}"><button type="submit" class="btn btn-default">Desbloquear</button></a><br>
        {/if}
	{/foreach}

</div>
{include file="footer.tpl"}