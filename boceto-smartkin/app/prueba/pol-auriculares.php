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
//imagepolygon($imagen, $array, 4, $col_poli); //4 = cantidad de vertices
//imagepolygon($imagen, $array2, 4, $col_poli); //4 = cantidad de vertices

// dibujar la elipse blanca
imagefilledellipse($imagen, 200, 200, 100, 100, $col_poli);
imagefilledellipse($imagen, 100, 200, 100, 100, $col_poli);

// Guardar la imagen
imagepng($imagen, "resultados/poligono.png");
imagedestroy($imagen);

//_______________

// dibujar la elipse blanca
//imagefilledellipse($imagen, 200, 150, 300, 200, $col_elipse);

// imprimir la imagen
//header("Content-type: image/png");
//imagepng($imagen);

?>

<html>
	<head></head>
	<body>
		<img src="resultados/poligono.png">
	</body>
</html>
