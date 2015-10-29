<?php
// Crear una imágen en blanco
$imagen = imagecreatetruecolor(300,350);

// Asignar un color para el polígono
$col_poli = imagecolorallocate($imagen, 255, 255, 255);

$array = array(
      	235,89,//punto 1
	291,98,//punto 2
	291,237,//punto 3
	235,244,//punto 4
			
    );
// Dibujar el polígono
imagepolygon($imagen, $array, 4, $col_poli); //4 = cantidad de vertices

// Guardar la imagen
imagepng($imagen, "rect.png");
imagedestroy($imagen);
?>

<html>
	<head></head>
	<body>
		<img src="rect.png">
	</body>
</html>
