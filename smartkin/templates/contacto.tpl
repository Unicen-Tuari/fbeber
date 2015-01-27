{foreach $info as $dato} 
  <p class="lead" >
    <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
    {$dato.tel}
  </p>
  <p class="lead">
    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 
    {$dato.tel}
  </p>
  <p class="lead">
    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 
    {$dato.dir}
  </p>

  <h3><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Redes Sociales</h3>
  <a href="http://{$dato.face}"><img src="./images/face.png" class="icono_redes"></a>
  <a href="http://{$dato.twitter}"><img src="./images/twitter.png"  class="icono_redes"></a>
  <a href="http://{$dato.google}"><img src="./images/google.png"  class="icono_redes"></a>
  <a href="http://{$dato.mercado_libre}"><img src="./images/mercadolibre.png"  class="icono_redes"></a>
{/foreach}
	