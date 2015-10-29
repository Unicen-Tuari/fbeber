<?php
//imagen transparente total
//Obtener tamaño total
$fondo = imagecreatefrompng("dispositivos/tablet.png");
$ancho_fondo=imagesx($fondo);
$alto_fondo=imagesy($fondo);

//Obtener tamaño orginal de la imagen a superponer
$estampa = imagecreatefromjpeg('estampas/estampa.jpg');
$ancho=imagesx($estampa);
$alto=imagesy($estampa);

//Crear una imagen en blanco
$im = imagecreatetruecolor($ancho_fondo, $alto_fondo);
$blanco = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, $ancho_fondo, $alto_fondo, $blanco);

// Hacer el fondo transparente
imagecolortransparent($im, $blanco);

//Copio imagen arriba
imagecopyresized($im, $estampa, 0, 0, 0, 0, $ancho_fondo, $alto_fondo, $ancho, $alto);

// Guardar la imagen
imagepng($im, "resultado/imagen_transparente.png");
imagedestroy($im);
?>

<html>
	<head></head>
	<body>
		<img src="imagen_transparente.png">
	</body>
</html>
