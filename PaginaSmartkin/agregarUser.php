<?php
	
include 'models/m_agregarUser.php';
include 'views/v_agregarUser.php';
include 'controllers/c_agregarUser.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_POST["email"]))
{
    $formulario["nombre_usuario"] = $_POST["nombre_usuario"];
	$formulario["email"] = $_POST["email"];
	$formulario["contrasenia"] = $_POST["contrasenia"];
	$controller->grabarFormulario($formulario);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
