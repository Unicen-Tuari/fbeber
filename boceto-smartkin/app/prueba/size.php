<?php
// Cargar una imagen externa
$zend = imagecreatefrompng('estampas/estampa.png');

// Crear una imagen de 200x200
$im = imagecreatetruecolor(600, 600);

// Establecer la tesela
imagesettile($im, $zend);

// Hacer que la imagen se repita
imagefilledrectangle($im, 0, 0, 599, 599, IMG_COLOR_TILED);

// Imprimir
imagepng($im, "resultados/size.png");

?>

<html>
	<head></head>
	<body>
		<img src="resultados/size.png">
	</body>
</html>
