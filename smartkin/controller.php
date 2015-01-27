<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirCategorias()
	{
		$this->view->imprimirCategorias($this->model->getcategoriasNombres());
	}

	public function imprimirContacto()
	{
		$this->view->imprimirContacto($this->model->getContacto());
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