<?php
require('./libs/Smarty.class.php');

class IndexView
{
    function __construct(){
	  $this->smarty = new Smarty();
	  $this->errores = array();
	}
//usuarios
	function mostrarHomeUsuarios($usuarios){
		$this->smarty->assign('usuarios', $usuarios);
		$this->smarty->display('admin_usuarios.tpl');
	}

//portfolios
	function mostrarHomePortfolios($portfolios){
		$this->smarty->assign('portfolios', $portfolios);

		$this->smarty->display('admin_portfolios.tpl');
	}

//info
	function mostrarHomeInfo($informacion){
		$this->smarty->assign('informacion', $informacion);
		$this->smarty->display('admin_informacion.tpl');
	}

//colecciones
	function mostrarHomeColecciones($colecciones){
		$this->smarty->assign('colecciones',$colecciones);
		$this->smarty->display('admin_colecciones.tpl');
	}

//comentarios
	function mostrarHomeComentarios($comentarios){
			  $this->smarty->assign('comentarios', $comentarios);

		$this->smarty->display('admin_comentarios.tpl');
	}

//admin
	function mostrarHomeAdmin($admin){
	  $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('admin', $admin);
	  
	  $this->smarty->display('index.tpl');
	}
	
	function mostrarError($error){
	  array_push($this->errores, $error);
	}
	
}
?>