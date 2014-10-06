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
$sql = "SELECT * FROM smartkin.modelo m JOIN smartkin.dispositivo d
ON (m.id_modelo = d.id_modelo)";
$q	 = $conn->query($sql);

while($r = $q->fetch()){
	$nombre_modelo [] = $r ['nombre_modelo'];
	$img_modelo [] = $r ['img_modelo'];
	$nombre_dispositivo [] = $r ['nombre_dispositivo'];
	$img_dispositivo [] = $r ['img_dispositivo'];
}

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("nombre_modelo", $nombre_modelo);
$smarty->assign("img_modelo", $img_modelo);
$smarty->assign("nombre_dispositivo", $nombre_dispositivo);
$smarty->assign("img_dispositivo", $img_dispositivo);

$smarty->display('modelos.tpl');
?>
