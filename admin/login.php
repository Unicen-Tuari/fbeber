<?php
	
include 'models/model_login.php';
include 'views/view_login.php';
include 'controllers/controller_login.php';

$model = new LoginModel();
$view = new LoginView();
$controller = new LoginController($model, $view);

if(isset($_POST["email"]))
{
    $formulario["email"] = $_POST["email"];
	$formulario["pass"] = $_POST["pass"];
	$controller->loginUsuario($formulario);
}
else
{
	$controller->imprimirPagina();
}

		
?>
