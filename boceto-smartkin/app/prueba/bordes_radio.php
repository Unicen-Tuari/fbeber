<?php
$r=20;
$color='FFFFFF';

$ruta_imagen = "estampas/estampa.jpg";

$img=imagecreatefromjpeg($ruta_imagen);
$m=getimagesize($ruta_imagen);
$bg=imagecolorallocate($img,hexdec(substr($color,0,2)),hexdec(substr($color,2,2)),hexdec(substr($color,4,2)));

/*sup-izq*/
if(!isset($_GET['si'])){
    imageline($img,0,0,$r,0,$bg);
    imageline($img,0,0,0,$r,$bg);
    imagearc($img,$r,$r,$r*2+1,$r*2+1,180,270,$bg);
    imagefilltoborder($img,2,2,$bg,$bg);
}
/*sup-izq*/
/*sup-der*/
if(!isset($_GET['sd'])){
    imageline($img,$m[0],0,$m[0]-$r,0,$bg);
    imageline($img,$m[0],0,$m[0],$r,$bg);
    imagearc($img,$m[0]-$r,$r,$r*2+1,$r*2+1,270,360,$bg);
    imagefilltoborder($img,$m[0]-2,2,$bg,$bg);
}
/*sup-der*/
/*abaj-izq*/
if(!isset($_GET['ai'])){
    imageline($img,0,$m[1],0,$m[1]-$r,$bg);
    imageline($img,0,$m[1],$r,$m[1],$bg);
    imagearc($img,$r,$m[1]-$r,$r*2+1,$r*2+1,90,180,$bg);
    imagefilltoborder($img,2,$m[1]-2,$bg,$bg);
}
/*abaj-izq*/
/*abaj-der*/
if(!isset($_GET['ad'])){
    imageline($img,$m[0],$m[1],$m[0],$m[1]-$r,$bg);
    imageline($img,$m[0]-$r,$m[1],$m[0],$m[1],$bg);
    imagearc($img,$m[0]-$r,$m[1]-$r,$r*2+1,$r*2+1,0,90,$bg);
    imagefilltoborder($img,$m[0]-2,$m[1]-2,$bg,$bg);
}
/*abaj-der*/


// Guardar la imagen
imagepng($img, "resultados/bordes_radio.png");
imagedestroy($img);
?>

<html>
	<head></head>
	<body>
		<img src="resultados/bordes_radio.png">
	</body>
</html>
