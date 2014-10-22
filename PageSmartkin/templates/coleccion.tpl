<<<<<<< HEAD
{foreach $colecciones as $nombre}
    <a onClick = "getDataModelos({$nombre.id_coleccion});">
    	<img src="./images/catalogo/{$nombre.img_coleccion}" width="200px">
    </a>
{/foreach}

<div id="tableModelos"></div>    
=======

{foreach $colecciones as $dato}
	<button onClick = "getDataModelos({$dato.id_coleccion});">{$dato.nombre_coleccion}</button>
	<img class="img-hover" src="./images/catalogo/{$dato.img_coleccion}" onClick = "getDataModelos({$dato.id_coleccion});">
{/foreach}


 
	


	
>>>>>>> 74beeb35f7ee36a93d45a7fdbe3933dc4e888ced
