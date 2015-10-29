<?php
//probando con iphone
$ruta_imagen = "estampas/estampa.jpg";
$fondo = imagecreatefrompng("dispositivos/iphod.png");
$array = array(
        51,61,//punto 1
	154,45,//punto 2
	154,324,// punto 3
	51,305//punto 4 		
    );

$miniatura_ancho_maximo = 150;
$miniatura_alto_maximo = 350;
$info_imagen = getimagesize($ruta_imagen);
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
	case "image/jpg":
	case "image/jpeg":
		$imagen = imagecreatefromjpeg( $ruta_imagen );
		break;
	case "image/png":
		$imagen = imagecreatefrompng( $ruta_imagen );
		break;
	case "image/gif":
		$imagen = imagecreatefromgif( $ruta_imagen );
		break;
}

$lienzo = imagecreatetruecolor($miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);
//__________________________________
// Establecer la tesela
imagesettile($fondo, $lienzo);

// Dibujar el polígono
imagefilledpolygon($fondo, $array, 4, IMG_COLOR_TILED); //4 = cantidad de vertices

// Imprimir
imagepng($fondo, "resultado.png");

?>

<html>
	<head></head>
	<body>
		<img src="resultado.png">
	</body>
</html>
