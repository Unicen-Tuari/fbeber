{include file='header.tpl'}

{if isset($usuario)}
		<h1>Logged in as:<p class="text-success">{$usuario[0].apyno}</p></h1>
        <button id="logout" class="btn btn-lg btn-primary btn-block">Logout</button>
{else}		
	<h1>Please Login</h1>
    <button id="login" class="btn btn-lg btn-primary btn-block" onClick="window.location = 'login.php';">Login</button>
{/if}  

  
{include file='footer.tpl'}