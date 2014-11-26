<?php
	require('./libs/Smarty.class.php');
	class View
	{
	     
	    public function imprimirPagina($nombresCategorias){
	       
			$smarty = new Smarty;
			$smarty->assign("categorias", $nombresCategorias);
			$smarty->display('index.tpl');
	    }
		
		public function imprimirColecciones($nombresCategorias){
	     
			$smarty = new Smarty;
			$smarty->assign("colecciones", $nombresCategorias);
			$smarty->display('coleccion.tpl');
	    }

	    public function imprimirModelos($nombresColecciones){
	     
			$smarty = new Smarty;
			$smarty->assign("modelos", $nombresColecciones);
			$smarty->display('modelos.tpl');
	    }

	    public function imprimirContacto(){
	     
			$smarty = new Smarty;
			$smarty->assign("contactos", $datosContacto);
			$smarty->display('contacto.tpl');
	    }
	}
?>