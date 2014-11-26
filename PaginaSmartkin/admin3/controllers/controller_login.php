<?php
class Controllerlogin
{
	private $model;
	private $view;
	private $controller;
 
	public function __construct($model, $view)
	{
		$this->model = $model;
		$this->view = $view;
	}
	public function imprimirPagina()
	{
		session_start();
		if (!isset($_SESSION["username"]))
		{
			$this->view->imprimirPagina();
		}
		else
		{
			header('Location: admin.php');
		}
	}
public function loginUsuario($formulario)
	{
		$user = $this->model->getUsuario($formulario["username"]);
		if ((empty($user)) or ($user[0]["password"] != ($formulario["password"])))
		{
			header('Location: login.php');
		}
		else
		{
			session_start();
			$_SESSION["username"] = $user[0]["username"];
			header('Location: admin.php');
		}
	}
}
?>