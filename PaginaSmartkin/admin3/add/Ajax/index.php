<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_GET["id_categoria"]))
{
	$controller->imprimirDatos($_GET["id_categoria"]);
}
else if(isset($_POST["id_coleccion"]))
{
    $formulario["id_categoria"] = $_POST["id_categoria"];
    $formulario["nombre_coleccion"] = $_POST["nombre_coleccion"];
	$controller->grabarFormulario($formulario);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
