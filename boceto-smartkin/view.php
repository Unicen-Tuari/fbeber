<?php
require('./libs/Smarty.class.php');
class View
{
     
    function __construct(){
	  $this->smarty = new Smarty();
	  $this->errores = array();
	}

	function mostrarHome($portfolios, $colecciones, $comentarios, $informacion){
	  $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('portfolios', $portfolios);
	  $this->smarty->assign('comentarios', $comentarios);
	  $this->smarty->assign('colecciones', $colecciones);
	  $this->smarty->assign('informacion', $informacion);
	  $this->smarty->display('index.tpl');
	}
	
	function mostrarError($error){
	  array_push($this->errores, $error);
	}
}
?>