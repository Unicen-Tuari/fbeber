<?php
	$ruta_imagen = "estampas/estampa.jpg";
	$fondo = imagecreatefrompng("dispositivos/disco.png");

	$dispositivo_x= 150;
	$dispositivo_y= 182;
	function crea_estampa($ruta_imagen){
		$info_imagen = getimagesize($ruta_imagen);
		$imagen_tipo = $info_imagen['mime'];
		switch ( $imagen_tipo ){
			case "image/jpg":
			case "image/jpeg":
				$img = imagecreatefromjpeg( $ruta_imagen );
				break;
			case "image/png":
				$img = imagecreatefrompng( $ruta_imagen );
				break;
			case "image/gif":
				$img = imagecreatefromgif( $ruta_imagen );
				break;
		}
		return ($img);
	}
	$imagen=crea_estampa($ruta_imagen);
	$img_x=imagesx($imagen);
	$img_y=imagesy($imagen);

	$lienzo = imagecreatetruecolor($dispositivo_x, $dispositivo_y);

	imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $dispositivo_x, $dispositivo_y, $img_x, $img_y);
	
	// Establecer la tesela
	imagesettile($fondo, $lienzo);


	// dibujar la elipse blanca
	imagefilledellipse($fondo, 150, 182, 283, 283, IMG_COLOR_TILED);

	// Guardar la imagen
	imagepng($fondo, "resultados/pol-disco.png");
	imagedestroy($fondo);

?>

<html>
	<head></head>
	<body>
		<img src="resultados/pol-disco.png">
	</body>
</html>
