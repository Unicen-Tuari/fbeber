<?php
require('./libs/Smarty.class.php');	

$nombre = $_GET["id_categoria"];

//Conexión
	$host = "localhost";
	$db = "smartkin";
	$user = "root";
	$pass = "";
	try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' .$pe->getMessage());
	}

//Consulta	
		
		$sql = "SELECT * FROM coleccion WHERE id_categoria =  '".$id_categoria."'";
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()[2]));
		}
		$colecciones=$resultado->fetchAll(PDO::FETCH_ASSOC);

	$smarty = new Smarty;
	$smarty->assign("colecciones", $colecciones);
	
	$smarty->display('contacto.tpl');
?>
