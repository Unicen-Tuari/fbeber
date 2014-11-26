<?php
require('../libs/Smarty.class.php');
class Viewadmin
{
	private $smarty;
	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	public function muestraPagina()
	{
		$this->smarty->display('admin.tpl');
	}
	
	/*usuario*/
	public function generaTablauser($datos)
	{
		$this->smarty->assign("usuarios",$datos);
		$this->smarty->display('tabla_adminuser.tpl');
	}
	public function generaDetalleuser($datos)
	{
		$this->smarty->assign("detalleuser",$datos);
		$this->smarty->display('pagdetalleuser.tpl');
	}

	/*coleccion*/
	public function generaTablacol($datos)
	{
		$this->smarty->assign("colecciones",$datos);
		$this->smarty->display('tabla_admincol.tpl');
	}
	public function generaDetallecol($datos)
	{
		$this->smarty->assign("detallecol",$datos);
		$this->smarty->display('pagdetallecol.tpl');
	}

	/*modelo*/
	public function generaTablamod($datos)
	{
		$this->smarty->assign("modelos",$datos);
		$this->smarty->display('tabla_adminmod.tpl');
	}
	public function generaDetallemod($datos)
	{
		$this->smarty->assign("detallemod",$datos);
		$this->smarty->display('pagdetallemod.tpl');
	}

	/*coleccion*/
	public function generaTablaport($datos)
	{
		$this->smarty->assign("portfolios",$datos);
		$this->smarty->display('tabla_adminport.tpl');
	}
	public function generaDetalleport($datos)
	{
		$this->smarty->assign("detalleport",$datos);
		$this->smarty->display('pagdetalleport.tpl');
	}


	/*categoria*/
	public function generaTablacat($datos)
	{
		$this->smarty->assign("categorias",$datos);
		$this->smarty->display('tabla_admincat.tpl');
	}
	public function generaDetallecat($datos)
	{
		$this->smarty->assign("detallecat",$datos);
		$this->smarty->display('pagdetallecat.tpl');
	}


	/*alertas*/
	public function generaAlerta($id)
	{
		if ($id == -3)
		{
			$this->smarty->assign("mensaje",'Usuario eliminado exitosamente');
			$this->smarty->display('alerta.tpl');
		}
		else if ($id == -4)
		{
			$this->smarty->assign("mensaje",'Categoria eliminada exitosamente');
			$this->smarty->display('alerta.tpl');
		}
		else if ($id == -7)
		{
			$this->smarty->assign("mensaje",'Coleccion eliminada exitosamente');
			$this->smarty->display('alerta.tpl');
		}
		else if ($id == -8)
		{
			$this->smarty->assign("mensaje",'Modelo eliminado exitosamente');
			$this->smarty->display('alerta.tpl');
		}
		else if ($id == -10)
		{
			$this->smarty->assign("mensaje",'Portfolio eliminado exitosamente');
			$this->smarty->display('alerta.tpl');
		}
		else
		{
			$this->smarty->assign("mensaje","agregado exitosamente con la ID: $id");
			$this->smarty->display('alerta.tpl');
		}
	}
}
?>