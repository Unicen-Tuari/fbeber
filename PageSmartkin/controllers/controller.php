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
		
		public function imprimirColecciones($id_categoria)
		{
			$this->view->imprimirColecciones($this->model->getColecciones($id_categoria));
		}

		public function imprimirModelos($id_coleccion)
		{
			$this->view->imprimirModelos($this->model->getModelos($id_coleccion));
		}
	}
?>