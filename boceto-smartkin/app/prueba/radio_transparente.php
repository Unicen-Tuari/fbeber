<?php

	//IMAGEN DE DISPOSITIVO (fondo)
	$fondo = imagecreatefrompng("dispositivos/iphod.png");
	$fondo_x=imagesx($fondo);
	$fondo_y=imagesy($fondo);

	//IMAGEN A SUPERPONER
	$ruta_imagen = "estampas/estampa.jpg";
	$img=imagecreatefromjpeg($ruta_imagen);
	$img_x=imagesx($img);
	$img_y=imagesy($img);
	
	function bordes($fondo,$fondo_x,$fondo_y,$ruta_imagen,$img,$img_x,$img_y){
		//RADIO DE BORDES
		$r=50;
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
		imagepng($im, 'resultados/radio_transparente.png');
		return ($im);
		imagedestroy($im);
	}
	bordes($fondo, $fondo_x, $fondo_y, $ruta_imagen, $img, $img_x, $img_y);

?>

<html>
	<head></head>
	<body>
		<img src="resultados/radio_transparente.png">
	</body>
</html>	
