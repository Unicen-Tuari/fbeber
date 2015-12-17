<?php
	
include 'Model/LoginModel.php';
include 'View/LoginView.php';
include 'Controller/LoginController.php';

$model = new LoginModel();
$view = new LoginView();
$controller = new LoginController($model, $view);

if(isset($_POST["email_admin"]))
{
    $formulario["email_admin"] = $_POST["email_admin"];
	$formulario["pass_admin"] = $_POST["pass_admin"];
	$controller->loginUsuario($formulario);
}
else
{
	$controller->imprimirPagina();
}

		
?>
