<?php
// Fichero y nuevo tamaño
$nombre_fichero = 'estampas/estampa.png';
$porcentaje = 0.2;

// Obtener los nuevos tamaños
list($ancho, $alto) = getimagesize($nombre_fichero);
$nuevo_ancho = $ancho * $porcentaje;
$nuevo_alto = $alto * $porcentaje;

// Cargar
$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
$origen = imagecreatefrompng($nombre_fichero);

// Cambiar el tamaño
imagecopyresized($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);

// Imprimir
imagepng($thumb, "resultados/ejemplo2.png");
?>

<html>
	<head></head>
	<body>
		<img src="resultados/ejemplo2.png">
	</body>
</html>

