<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_POST["nombre_modelo"]))
{
	$formulario["id_coleccion"] = $_POST["id_coleccion"];
    $formulario["nombre_modelo"] = $_POST["nombre_modelo"];
    $formulario["img_modelo"] = $_POST["img_modelo"];
	$controller->grabarFormulario($formulario);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
