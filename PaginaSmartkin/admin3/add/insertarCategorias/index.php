<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_POST["nombre_categoria"]))
{
    $formulario["nombre_categoria"] = $_POST["nombre_categoria"];
	$controller->grabarFormulario($formulario);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
