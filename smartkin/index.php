<?php
	
include 'model.php';
include 'view.php';
include 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_GET["categoria"]))
{
	$controller->imprimirColecciones($_GET["categoria"]);
}
else if(isset($_POST["new_name_user"]))
{
    $formulario["new_name_user"] = $_POST["new_name_user"];
    $formulario["new_pass"] = md5($_POST["new_pass"]);
    $formulario["new_email"] = $_POST["new_email"];
	$controller->grabarUsuario($formulario);
}
else
{
	$controller->imprimirCategorias();
	$controller->imprimirContacto();
	
	

}



		
		
?>
