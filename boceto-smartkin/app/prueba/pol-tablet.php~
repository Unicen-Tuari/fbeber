<?php
// Crear una imágen en blanco
$imagen = imagecreatetruecolor(300,350);

// Asignar un color para el polígono
$col_poli = imagecolorallocate($imagen, 255, 255, 255);

$array = array(
      	179,89,//punto 1
	285,89,//punto 2
	285,302,//punto 3
	155,302,//punto 4
	155,175//punto 5
			
    );
// Dibujar el polígono
imagepolygon($imagen, $array, 5, $col_poli); //5 = cantidad de vertices

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
