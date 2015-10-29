<?php
// Cargar una imagen externa
$zend = imagecreatefromjpeg('estampas/estampa.jpg');

// Crear una imagen de 200x200
$im = imagecreatetruecolor(200, 200);

// Establecer la tesela
imagesettile($im, $zend);

// Hacer que la imagen se repita
imagefilledrectangle($im, 0, 0, 599, 599, IMG_COLOR_TILED);

// Dibujar una elipse a rellenar con un borde negro
imageellipse($im, 50, 50, 50, 50, IMG_COLOR_TILED);

// Establecer los colores del borde y del relleno
$borde = imagecolorallocate($im, 0, 0, 0);
$relleno = imagecolorallocate($im, 255, 0, 0);

// Rellenar la selección
imagefilltoborder($im, 50, 50, $borde, false);

// Imprimir
imagepng($im, "resultados/bordes.png");

?>

<html>
	<head></head>
	<body>
		<img src="resultados/bordes.png">
	</body>
</html>
