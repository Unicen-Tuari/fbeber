<?php
//probando con iphone
	
	$ruta_imagen = "estampas/abel";
	$fondo = imagecreatefrompng("dispositivos/iphod.png");

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
	
	function crea_poligono($img, $img_x, $img_y,$fondo){
		//VARIABLES DE POLIGONO
		$array = array(
			51,61,//punto 1
			154,45,//punto 2
			154,324,// punto 3
			51,305//punto 4 		
			);
		$miniatura_ancho_maximo = 150;
		$miniatura_alto_maximo = 350;

		$lienzo = imagecreatetruecolor($miniatura_ancho_maximo, $miniatura_alto_maximo );

		imagecopyresampled($lienzo, $img, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, 	$img_x, $img_y);

		// Establecer la tesela
		imagesettile($fondo, $lienzo);

		// Dibujar el polígono
		imagefilledpolygon($fondo, $array, 4, IMG_COLOR_TILED); //4 = cantidad de vertices
		
		return ($fondo);
		
	}
	$f=crea_poligono($imagen,$img_x,$img_y,$fondo);
	imagepng($f, "resultados/viendo.png");
	// guarda img
	
	
	

?>

<html>
	<head></head>
	<body>
		<img src="resultados/viendo.png">
	</body>
</html>
