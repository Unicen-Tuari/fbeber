<h3>Colecciones</h3>
	{foreach $colecciones as $dato}
		<img class="zoom" src="./images/catalogo/{$dato.img_coleccion}" onClick = "getDataModelos({$dato.id_coleccion});" alt="{$dato.img_coleccion}" width="140px" height="140px">
	{/foreach}
<br>
<br>
<div id="modelos"></div>