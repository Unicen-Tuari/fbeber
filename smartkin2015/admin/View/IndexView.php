<?php
require('./libs/Smarty.class.php');

class IndexView
{
    function __construct(){
	  $this->smarty = new Smarty();
	  $this->errores = array();
	}

	function mostrarHomeAdmin($admin,$portfolios, $colecciones, $comentarios, $informacion, $usuarios,$cantusuarios,$cantfavoritos,$cantcomentarios){
	  $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('admin', $admin);
	  $this->smarty->assign('usuarios', $usuarios);
	
	  $this->smarty->assign('cantcomentarios',$cantcomentarios);	
	  $this->smarty->assign('cantfavoritos',$cantfavoritos);	 
	  $this->smarty->assign('cantusuarios',$cantusuarios);
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