<?php
class Controlleradmin
{
	private $model;
	private $view;
	
	public function __construct($model, $view) 
	{
		$this->model = $model;
		$this->view = $view;
	}
	public function imprimirPagina()
	{
		$this->view->muestraPagina();
	}
	/*usuario*/
	public function imprimirTablauser()
	{
		$this->view->generaTablauser($this->model->consultaUsuarios());
	}
	public function imprimirFormuser()
	{
		$this->view->generaFormuser();
	}
	public function imprimirDetalleuser($id_usuario)
	{
		$this->view->generaDetalleuser($this->model->consultaDetalleuser($id_usuario));
	}
	public function borrarUser($id)
	{
		$this->view->generaAlerta($this->model->deleteUser($id));
	}
	
	/*categoria*/
	public function imprimirTablacat()
	{
		$this->view->generaTablacat($this->model->consultaCategorias());
	}
	public function imprimirFormcat()
	{
		$this->view->generaFormcat();
	}
	public function imprimirDetallecat($id_categoria)
	{
		$this->view->generaDetallecat($this->model->consultaDetallecat($id_categoria));
	}
	public function actualizaCat($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		$this->view->generaAlerta($this->model->updateCat($arreglo));
	}
	public function borrarCat($id)
	{
		$this->view->generaAlerta($this->model->deleteCat($id));
	}

	/*coleccion*/
	public function imprimirTablacol()
	{
		$this->view->generaTablacol($this->model->consultaColeccion());
	}
	public function imprimirFormcol()
	{
		$this->view->generaFormcol();
	}
	public function imprimirDetallecol($id_coleccion)
	{
		$this->view->generaDetallecol($this->model->consultaDetallecol($id_coleccion));
	}
	public function borrarCol($id)
	{
		$this->view->generaAlerta($this->model->deleteCol($id));
	}
	
	/*modelo*/
	public function imprimirTablamod()
	{
		$this->view->generaTablamod($this->model->consultaModelos());
	}
	public function imprimirFormmod()
	{
		$this->view->generaFormmod();
	}
	public function imprimirDetallemod($id_modelo)
	{
		$this->view->generaDetallemod($this->model->consultaDetallemod($id_modelo));
	}
	public function borrarMod($id)
	{
		$this->view->generaAlerta($this->model->deleteMod($id));
	}
	
	/*portfolio*/
	public function imprimirTablaport()
	{
		$this->view->generaTablaport($this->model->consultaPortfolio());
	}
	public function imprimirFormport()
	{
		$this->view->generaFormport();
	}
	public function imprimirDetalleport($id_portfolio)
	{
		$this->view->generaDetalleport($this->model->consultaDetalleport($id_portfolio));
	}
	public function borrarPort($id)
	{
		$this->view->generaAlerta($this->model->deletePort($id));
	}


}
?>