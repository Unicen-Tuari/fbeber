{include file="header.tpl"}
{if isset($usuarios)}	
	
	<div class="col-md-12 panel">
<h3 class="text-center">Listado de Usuarios</h3>
<br>

<div class="col-md-6 text-left">
	<h4 class=" text-center">Usuarios Activos</h4>			
	    {foreach $usuarios as $usuario}
	    {if !$usuario['bloqueado']}
	      	<a href="admin_usuarios.php?action=no_habilitar_usuario&id_user={$usuario['id_user']}"><button type="submit" class="btn btn-danger">Bloquear</button></a>
	      	<img src=".{$usuario.img_user}" class="icon_user" width="50px;">
	      	{$usuario.email_user}
	        <br>
	    {/if}
	{/foreach}
</div>   
	<div class="col-md-6 text-left">
	<h4 class="text-center">Usuarios Bloqueados</h4>
	{foreach $usuarios as $usuario}			
    	{if $usuario['bloqueado']} 		
    	<a href="admin_usuarios.php?action=habilitar_usuario&id_user={$usuario['id_user']}"><button type="submit" class="btn btn-success">Desbloquear</button></a>
    	<img src=".{$usuario.img_user}" class="icon_user" width="50px">
		{$usuario.email_user}
         <br>
        {/if}
	{/foreach}
	</div>
{/if}
{include file="footer.tpl"}