<?php
require('./libs/Smarty.class.php');
class View
{
     
    public function imprimirPagina($categoriasCategorias,$info,$port,$comentario,$users){
       
		$smarty = new Smarty;
		$smarty->assign("categoria", $categoriasCategorias);
		$smarty->assign("info",$info);
		$smarty->assign("port",$port);
		$smarty->assign("comentario",$comentario);
		$smarty->assign("users", $users);
		$smarty->display('index.tpl');
    }
	
    public function imprimirColecciones($categoriasCategorias){
     
		$smarty = new Smarty;
		$smarty->assign("Colecciones", $categoriasCategorias);
		$smarty->display('coleccion.tpl');
    }

    public function MensajeExito(){
     
		echo "Formulario guardado con exito!";
    }

    public function MensajeBorrado(){
     
		echo "Formulario borrado con exito!";
    }
	
	public function MensajeError($error){
		echo $error;
    }
}
?>