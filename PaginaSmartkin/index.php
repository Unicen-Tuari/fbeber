<?php
		
	include 'models/model.php';
	include 'views/view.php';
	include 'controllers/controller.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);
	
	session_start();

	if(isset($_GET["id_categoria"]))
	{
		$controller->imprimirColecciones($_GET["id_categoria"]);
	}
	else if(isset($_GET["id_coleccion"]))
	{
		$controller->imprimirModelos($_GET["id_coleccion"]);
	}
	else if(isset($_GET["contacto"]))
	{
		$controller->imprimirContacto();
	}
	
	else
	{
		$controller->imprimirPagina();
	}

?>
