<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		$this->view->imprimirPagina($this->model->getcategoriasNombres(), $this->model->getContacto(), $this->model->getPortfolio(),$this->model->getComentario(),$this->model->getUsers());
		
	}
	
	public function imprimirColecciones($categoria)
	{
		$this->view->imprimirColecciones($this->model->getColeccionesPorcategoria($categoria));
	}

	public function grabarUsuario($formulario)
	{
	    $error = $this->verificarFormulario($formulario);
		if(!$error)
		{
			$this->model->grabarUsuario($formulario);
			$this->view->MensajeExito();
		}
		else
		{
			$this->view->MensajeError($error);
		}
		
	}

	public function grabarComentario($formulario)
	{
	    /*$error = $this->verificarFormulario($formulario);
		if(!$error)
		{*/
			$this->model->grabarComentario($formulario);
			$this->view->MensajeExito();
		/*}
		else
		{
			$this->view->MensajeError($error);
		}*/
		
	}
	
	private function verificarFormulario($formulario)
	{
		if(!$this->verificaremail($formulario["new_email"]))
			return "Error: Email Inválido";
		//Cualquier verificacion del formulario		
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