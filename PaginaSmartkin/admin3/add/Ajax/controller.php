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
		$this->view->imprimirPagina($this->model->getCategorias());
	}

	public function grabarFormulario($formulario)
	{
		$this->model->grabarFormulario($formulario);
		$this->view->MensajeExito();
	}
	
}
?>