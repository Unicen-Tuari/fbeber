
<div class="galeria">
	{foreach $colecciones as $dato}
		<img class="lista" src="./images/catalogo/{$dato.img_coleccion}" onClick = "getDataModelos({$dato.id_coleccion});" alt="{$dato.img_coleccion}" width="140px" height="140px">
		<div id="modelos" class="modelo"></div>
	{/foreach}

</div>


