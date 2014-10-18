
{foreach $colecciones as $dato}
	<button onClick = "getDataModelos({$dato.id_coleccion});">{$dato.nombre_coleccion}</button>
	<img class="img-hover" src="./images/catalogo/{$dato.img_coleccion}" onClick = "getDataModelos({$dato.id_coleccion});">
{/foreach}


 
	


	