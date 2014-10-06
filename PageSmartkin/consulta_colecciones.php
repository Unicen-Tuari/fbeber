<?php
require('./libs/Smarty.class.php');

$smarty = new Smarty;

//Configuración
$host 	= "localhost";
$db	= "smartkin";
$user	= "root";
$pass	= "";

//Conexión
try{
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' -$pe->getMessage());
}

//Consulta
$sql = "SELECT * FROM smartkin.coleccion";
$q	 = $conn->query($sql);

while($r = $q->fetch()){
	$nombre_coleccion [] = $r ['nombre_coleccion'];
	$img_coleccion [] = $r ['img_coleccion'];
}

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("nombre_coleccion", $nombre_coleccion);
$smarty->assign("img_coleccion", $img_coleccion);

$smarty->display('colecciones.tpl');
?>
