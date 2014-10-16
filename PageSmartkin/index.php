<?php
	
include 'models/model.php';
include 'views/view.php';
include 'controllers/controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);
if(isset($_GET["id_categoria"]))
{
	$controller->imprimirColecciones($_GET["id_categoria"]);
}
else
{
	$controller->imprimirPagina();
}



		
		
?>
