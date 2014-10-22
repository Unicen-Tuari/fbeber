{foreach $colecciones as $nombre}
    <a onClick = "getDataModelos({$nombre.id_coleccion});">
    	<img src="./images/catalogo/{$nombre.img_coleccion}" width="200px">
    </a>
{/foreach}

<div id="tableModelos"></div>    