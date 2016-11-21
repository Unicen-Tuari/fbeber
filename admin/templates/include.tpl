{include file='header.tpl'}

{if isset($email)}
	<div id="contenido">
		<h1>{$email}<button id="logout" class="btn btn-primary">Salir</button><br><p class="text-success">
		{include file='index.tpl'}<!--NO ENTRA ACA-->
  </div>
    {else}      
        <div class="col-md.6">
            <button id="logout" class="btn btn-primary">Salir</button>
        </div>
    {/if}
  

  
{include file='footer.tpl'}