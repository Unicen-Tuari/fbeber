<?php
// Crear una imágen en blanco
$imagen = imagecreatetruecolor(300, 350);

// Asignar un color para el polígono
$col_poli = imagecolorallocate($imagen, 255, 255, 255);

$array = array(
        51,61,//punto 1
	154,45,//punto 2
	154,324,// punto 3
	51,305//punto 4 
			
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
