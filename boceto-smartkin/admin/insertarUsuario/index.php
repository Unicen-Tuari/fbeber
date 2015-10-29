<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_POST["name_user"]))
{
    $formulario["name_user"] = $_POST["name_user"];
    $formulario["pass_user"] = $_POST["pass_user"];
    $formulario["email"] = $_POST["email"];
	$controller->grabarFormulario($formulario);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
