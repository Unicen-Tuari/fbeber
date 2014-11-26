<?php
require('./libs/Smarty.class.php');
class View
{
	public function imprimirPagina($nombresCategorias){
       
		$smarty = new Smarty;
		$smarty->assign("categorias", $nombresCategorias);
		$smarty->display('index.tpl');
    }
	
	 public function MensajeExito(){
     
		echo "Coleccion agregada!";
    }
	
	 public function MensajeError($error){
		echo $error;
    }
     
    
	
}
?>