<h3>Listado de Usuarios</h3>
<br>
<div class="col-md-6 bordes">
	<h4 class=" text-center">Usuarios Activos</h4>
	{foreach $usuarios as $usuario}			
	    {if !$usuario['bloqueado']}
	      	<img src=".{$usuario.img_user}" class="icon_user">
	      	{$usuario.email_user}
	        <a class="glyphicon glyphicon-ok" href="index.php?action=no_habilitar_usuario&id_user={$usuario['id_user']}"><button type="submit" class="btn btn-default">Deshabilitar</button></a>  <br>
	    {/if}
	{/foreach}
</div>

<div class="col-md-6 bordes">
 	<h4 class="text-center">Usuarios Bloqueados</h4>   
	{foreach $usuarios as $usuario}			
    	{if $usuario['bloqueado']}

	      	<img src=".{$usuario.img_user}" class="icon_user">

            {$usuario.email_user}
          	<a class="glyphicon glyphicon-ok" href="index.php?action=habilitar_usuario&id_user={$usuario['id_user']}"><button type="submit" class="btn btn-default">Habilitar</button></a><br>
        {/if}
	{/foreach}
</div>  
	