<?php
	
include 'Model/LoginModel.php';
include 'View/LoginView.php';
include 'Controller/LoginController.php';

$model = new LoginModel();
$view = new LoginView();
$controller = new LoginController($model, $view);

if(isset($_POST["email_user"]) && isset($_POST['pass_user']))
{
    $formulario["email_user"] = $_POST["email_user"];
    $formulario["pass_user"] = $_POST["pass_user"];
	$controller->loginUsuario($formulario);
}
else
{
	$controller->mostrarHome();
}

		
?>
