<?php
//probando con iphone
	
	$ruta_imagen = "estampas/estampa.jpg";

	//FONDO	
	$fondo = imagecreatefrompng("dispositivos/iphod.png");
	$fondo_x=imagesx($fondo);
	$fondo_y=imagesy($fondo);
	
	//IMAGEN A SUPERPONER
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
	
	function bordes($f,$fondo_x,$fondo_y,$ruta_imagen,$img,$img_x,$img_y){
		//RADIO DE BORDES
		$r=20;
		$color='FFFFFF';
	
		//INFO DE ESTAMPA
		$m=getimagesize($ruta_imagen);
		$bg=imagecolorallocate($img,hexdec(substr($color,0,2)),hexdec(substr($color,2,2)),hexdec(substr	($color,4,2)));
		
		//RECTANGULO BLANCO TRANSPARENTE
		$im = imagecreatetruecolor($fondo_x, $fondo_y);
		$blanco = imagecolorallocate($im, 255, 255, 255);
		imagefilledrectangle($im,0, 0, $fondo_x, $fondo_y, $blanco);
		imagecolortransparent($im, $blanco);

		//REDONDEO BORDES
		/*sup-izq*/
		if(!isset($_GET['si'])){
			imageline($img,0,0,$r,0,$bg);
			imageline($img,0,0,0,$r,$bg);
			imagearc($img,$r,$r,$r*2+1,$r*2+1,180,270,$bg);
			imagefilltoborder($img,2,2,$bg,$bg);
		}
		/*sup-der*/
		if(!isset($_GET['sd'])){
			imageline($img,$m[0],0,$m[0]-$r,0,$bg);
			imageline($img,$m[0],0,$m[0],$r,$bg);
			imagearc($img,$m[0]-$r,$r,$r*2+1,$r*2+1,270,360,$bg);
			imagefilltoborder($img,$m[0]-2,2,$bg,$bg);
		}
		/*abaj-izq*/
		if(!isset($_GET['ai'])){
			imageline($img,0,$m[1],0,$m[1]-$r,$bg);
			imageline($img,0,$m[1],$r,$m[1],$bg);
			imagearc($img,$r,$m[1]-$r,$r*2+1,$r*2+1,90,180,$bg);
			imagefilltoborder($img,2,$m[1]-2,$bg,$bg);
		}
		/*abaj-der*/
		if(!isset($_GET['ad'])){
			imageline($img,$m[0],$m[1],$m[0],$m[1]-$r,$bg);
			imageline($img,$m[0]-$r,$m[1],$m[0],$m[1],$bg);
			imagearc($img,$m[0]-$r,$m[1]-$r,$r*2+1,$r*2+1,0,90,$bg);
			imagefilltoborder($img,$m[0]-2,$m[1]-2,$bg,$bg);
		}

		//COPIO IMAGEN
		imagecopyresized($im, $img, 0, 0, 0, 0, $fondo_x, $fondo_y, $img_x, $img_y);

		// Guardar la imagen
		
		return ($im);
		imagedestroy($im);
	}
	$imagen=bordes($fondo, $fondo_x, $fondo_y, $ruta_imagen, $imagen, $img_x, $img_y);
	
	
	imagepng($f, "resultado/fusion.png");
	// guarda img
	
	
	

?>

<html>
	<head></head>
	<body>
		<img src="resultado/fusion.png">
	</body>
</html>
