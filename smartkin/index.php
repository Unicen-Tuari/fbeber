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
	$controller->imprimirUsers($_GET["user"]);
}
else if(isset($_POST["new_name_user"]))
{
    $formulario["new_name_user"] = $_POST["new_name_user"];
    $formulario["new_pass"] = md5($_POST["new_pass"]);
    $formulario["new_email"] = $_POST["new_email"];
	$controller->grabarUsuario($formulario);
}
else if(isset($_POST["new_comentario"]))
{
	$formulario["new_id_user"] = $_POST["new_id_user"];
    $formulario["new_comentario"] = $_POST["new_comentario"];
	$controller->grabarComentario($formulario);
}
else
{
	$controller->imprimirPagina();

}



		
		
?>
