<?php
	// Creo dos imagenes, una es el fondo y la otra la imagen que le voy a superponer
	$fondo = imagecreatefromjpeg("tablet.jpg");
	$imagen = imagecreatefrompng("estampa.png");

	// Obtengo los tamaños de las imagenes
	$fondoAncho = imagesx($fondo);
	$fondoAlto = imagesy($fondo);
	$imagenAncho = imagesx($imagen);
	$imagenAlto = imagesy($imagen);



	imagefilter($fondo, IMG_FILTER_COLORIZE, 0,0,0, 10);



	// Damos salida a la imagen final
	imagepng($fondo,"resultados/ejemplo1.png");

	// Destruimos las imágenes
	imagedestroy($fondo);
	imagedestroy($imagen);
?> 
<html>
	<head></head>
	<body>
		<img src="resultados/ejemplo1.png">
	</body>
</html>	
