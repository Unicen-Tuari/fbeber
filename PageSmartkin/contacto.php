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
$sql = "SELECT * FROM smartkin.usuario";
$q	 = $conn->query($sql);

while($r = $q->fetch()){
	$email [] = $r ['email'];
	$direccion [] = $r ['direccion'];
	$telefono [] = $r ['telefono'];
}

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("email", $email);
$smarty->assign("direccion", $direccion);
$smarty->assign("telefono", $telefono);

$smarty->display('contacto.tpl');
?>
