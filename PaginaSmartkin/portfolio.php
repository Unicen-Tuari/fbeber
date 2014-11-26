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
$sql = "SELECT * FROM portfolio";
$q	 = $conn->query($sql);

while($r = $q->fetch()){
	$nombre_portfolio [] = $r ['nombre_portfolio'];
	$img_portfolio [] = $r ['img_portfolio'];
}

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("nombre_portfolio", $nombre_portfolio);
$smarty->assign("img_portfolio", $img_portfolio);

$smarty->display('portfolio.tpl');
?>
