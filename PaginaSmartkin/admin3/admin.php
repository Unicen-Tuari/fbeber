<?php
	include './models/model_admin.php';
	include './views/view_admin.php';
	include './controllers/controller_admin.php';
	$model = new Modeladmin();
	$view = new Viewadmin();
	$controller = new Controlleradmin($model, $view);
	session_start();

	/*categoria*/
	if (isset($_POST["cat"]))
	{
		$controller->imprimirTablacat();
	}
	else if (isset($_POST["id_categoria"]))
	{
		$controller->imprimirDetallecat($_POST["id_categoria"]);
	}
	else if (isset($_POST["id_cat"]))
	{
		$controller->actualizaCat($_POST);
	}
	else if (isset($_POST["id_delcat"]))
	{
		$controller->borrarCat($_POST["id_delcat"]);
	}

	/*usuario*/
	else if (isset($_POST["user"]))
	{
		$controller->imprimirTablauser();
	}
	else if (isset($_POST["user"]))
	{
		$controller->imprimirTablauser();
	}
	else if (isset($_POST["id_usuario"]))
	{
		$controller->imprimirDetalleuser($_POST["id_usuario"]);
	}
	else if (isset($_POST["id_deluser"]))
	{
		$controller->borrarUser($_POST["id_deluser"]);
	}

	/*coleccion*/
	else if (isset($_POST["col"]))
	{
		$controller->imprimirTablacol();
	}
	else if (isset($_POST["col"]))
	{
		$controller->imprimirTablacol();
	}
	else if (isset($_POST["id_coleccion"]))
	{
		$controller->imprimirDetallecol($_POST["id_coleccion"]);
	}
	else if (isset($_POST["id_delcol"]))
	{
		$controller->borrarCol($_POST["id_delcol"]);
	}

	/*modelo*/
	else if (isset($_POST["mod"]))
	{
		$controller->imprimirTablamod();
	}
	else if (isset($_POST["mod"]))
	{
		$controller->imprimirTablamod();
	}
	else if (isset($_POST["id_modelo"]))
	{
		$controller->imprimirDetallemod($_POST["id_modelo"]);
	}
	else if (isset($_POST["id_delmod"]))
	{
		$controller->borrarMod($_POST["id_delmod"]);
	}

	/*portfolio*/
	else if (isset($_POST["port"]))
	{
		$controller->imprimirTablaport();
	}
	else if (isset($_POST["port"]))
	{
		$controller->imprimirTablaport();
	}
	else if (isset($_POST["id_portfolio"]))
	{
		$controller->imprimirDetalleport($_POST["id_portfolio"]);
	}
	else if (isset($_POST["id_delport"]))
	{
		$controller->borrarPort($_POST["id_delport"]);
	}
		
	
	/*--*/
	else if (isset($_SESSION["username"]))
	{
		$controller->imprimirPagina();
	}

?>