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
$sql = "SELECT * FROM smartkin.categoria";
$q	 = $conn->query($sql);

while($r = $q->fetch()){
	$categoria = $r ['nombre_categoria'];
	
}

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->display('index.tpl');

?>
