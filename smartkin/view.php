<?php
require('./libs/Smarty.class.php');
class View
{
     
    public function imprimirCategorias($categoriasCategorias){
       
		$smarty = new Smarty;
		$smarty->assign("categorias", $categoriasCategorias);
		$smarty->display('index.tpl');
    }

    public function imprimirContacto($info){
       
		$smarty = new Smarty;
		$smarty->assign("info", $info);
		$smarty->display('contacto.tpl');
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