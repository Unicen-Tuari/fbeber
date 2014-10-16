{foreach $colecciones as $dato}
	<img class="img-hover" src="./images/catalogo/{$dato.img_coleccion}">
{/foreach}
<select id="id_coleccion" onChange = "getMata();">
    {foreach $colecciones as $nombre}
      <option value="{$nombre.id_coleccion}">{$nombre.nombre_coleccion}</option>
    {/foreach}
</select> 
	


	