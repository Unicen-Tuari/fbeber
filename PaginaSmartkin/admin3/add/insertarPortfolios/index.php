<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_POST["nombre_portfolio"]))
{
    $formulario["nombre_portfolio"] = $_POST["nombre_portfolio"];
    $formulario["img_portfolio"] = $_POST["img_portfolio"];
	$controller->grabarFormulario($formulario);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
