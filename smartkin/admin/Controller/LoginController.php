<?php
class LoginController
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		session_start();
		if(!isset($_SESSION["email_admin"]))
		{
			$this->view->imprimirPagina();
		}
		else
		{
			header('Location: index.php');
		}
	}
	
	public function loginUsuario($formulario)
	{
	    $error = $this->verificarFormulario($formulario);
		if(!$error)
		{
			$user = $this->model->getUsuario($formulario["email_admin"]);
			
			if(empty($user))
			{
				$this->view->MensajeError("Error: Usuario Inexistente");
			} 	
			if($user[0]["pass_admin"] != md5($formulario["pass_admin"]))
			{
				$this->view->MensajeError("Error: Password Inválida");
			}
			
			session_start();
			$_SESSION["email_admin"]=$formulario["email_admin"];
			echo "index.php";
			
		}
		else
		{
			$this->view->MensajeError($error);
		}
		
	}
	
	private function verificarFormulario($formulario)
	{
		if(!$this->verificaremail($formulario["email_admin"]))
			return "Error: Email Inválido";
		if(strlen($formulario["pass_admin"])<=0)
			return "Error: La password es vacía";
	}
	
	private function verificaremail($email){ 
	  if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
		  return false; 
	  } else { 
		   return true; 
	  } 
	}
}
?>