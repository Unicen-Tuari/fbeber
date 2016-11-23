{include file='header.tpl'}
{if !isset($admin)}
	<div id='contenido'>{include file='index.tpl'}</div>
		<h1>Logged in as:<p class="text-success">{$admin[0].email}</p></h1>
        {$admin[0].apyno}
        <button id="logout" class="btn btn-lg btn-primary btn-block">Logout</button>
{else}		
	<h1>Please Login</h1>
    <button id="login" class="btn btn-lg btn-primary btn-block" onClick="window.location = 'login.php';">Login</button>
{/if}  

{include file='footer.tpl'}