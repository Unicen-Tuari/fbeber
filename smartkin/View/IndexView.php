<?php
require('./libs/Smarty.class.php');

class IndexView
{
    function __construct(){
	  $this->smarty = new Smarty();
	  $this->errores = array();
	}

	function mostrarHomeColecciones($usuario,$colecciones,$favoritos){
	  $this->smarty->assign('usuario', $usuario);
	  $this->smarty->assign('colecciones', $colecciones);
	  $this->smarty->assign('favoritos',$favoritos);
	  $this->smarty->display('colecciones.tpl');
	}
	function mostrarHomePortfolios($portfolios){
		$this->smarty->assign('portfolios', $portfolios);
		$this->smarty->display('portfolios.tpl');
	}
	function mostrarHomeComentarios($usuario,$comentarios){
		$this->smarty->assign('usuario', $usuario);
		$this->smarty->assign('comentarios', $comentarios);
		$this->smarty->display('comentarios.tpl');
	}
	

	function mostrarHomeAdmin($usuario, $comentariosUser, $likes, $informacion){
	  //USUARIO
	  $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('usuario', $usuario);
	  $this->smarty->assign('comentariosUser', $comentariosUser);
	  $this->smarty->assign('likes', $likes);
	  //HOME
	  $this->smarty->assign('informacion', $informacion);
	  $this->smarty->display('index.tpl');
	}

	

	public function generaAlerta()
	{
		$this->smarty->display('alerta.tpl');
	}
	
	function mostrarError($error){
	  array_push($this->errores, $error);
	}
	
}
?>