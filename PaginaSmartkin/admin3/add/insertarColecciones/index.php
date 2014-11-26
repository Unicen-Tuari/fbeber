<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_POST["nombre_coleccion"]))
{
	$formulario["id_categoria"] = $_POST["id_categoria"];
    $formulario["nombre_coleccion"] = $_POST["nombre_coleccion"];
    $formulario["img_coleccion"] = $_POST["img_coleccion"];
	$controller->grabarFormulario($formulario);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
