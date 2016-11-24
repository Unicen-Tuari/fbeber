{include file='header.tpl'}
{if isset($admin)}
	<b>Hola {$admin[0].apyno}! </b><a id="logout" href="#"><span class="label label-info">Salir</span></a>
    <div id='contenido'>{include file='index.tpl'}</div>

{else}		
	<h1>Please Login</h1>
    <button id="login" class="btn btn-lg btn-primary btn-block" onClick="window.location = 'login.php';">Login</button>
{/if}  

{include file='footer.tpl'}