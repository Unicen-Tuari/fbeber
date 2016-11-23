{include file='header.tpl'}
<div class="redes text-center">
      <a href=""><img  class="zoom" src="images/redes/fb-color.png" width="25px;"></a>
      <a href=""><img class="zoom" src="images/redes/tw-color.png" width="25px;"></a>
      <a href=""><img class="zoom" src="images/redes/google-color.png" width="25px;"></a>
      <a href=""><img class="zoom" src="images/redes/inst-color.png" width="25px;"></a>
      {if isset($usuario)}
        <b>Hola {$usuario[0].apyno}! </b><a id="logout" href="#"><span class="label label-info">Salir</span></a>
      {else}    
        <a href="login.php"><span class="label label-warning">Iniciar Sesión / Registrarse</span></a><br>
      {/if} 
      
      
    </div>

  <div id="contenido">
  {include file='index.tpl'}
  </div>
{include file='footer.tpl'}