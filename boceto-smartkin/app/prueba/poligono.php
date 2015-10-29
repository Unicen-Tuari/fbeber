<?php
// Crear una imágen en blanco
$imagen = imagecreatetruecolor(300,350);

// Asignar un color para el polígono
$col_poli = imagecolorallocate($imagen, 255, 255, 255);

$array = array(
      	37,200,//punto 1
	120,200,//punto 2
	120,285,//punto 3
	37,285,//punto 4
			
    );
$array2 = array(
      	182,200,//punto 1
	265,200,//punto 2
	265,285,//punto 3
	182,285,//punto 4
			
    );
// Dibujar el polígono
imagepolygon($imagen, $array, 4, $col_poli); //4 = cantidad de vertices
imagepolygon($imagen, $array2, 4, $col_poli); //4 = cantidad de vertices

// Guardar la imagen
imagepng($imagen, "resultados/poligono.png");
imagedestroy($imagen);
?>

<html>
	<head></head>
	<body>
		<img src="resultados/poligono.png">
	</body>
</html>
