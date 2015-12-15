<?php
require('./libs/Smarty.class.php');

class IndexView
{
    function __construct(){
	  $this->smarty = new Smarty();
	  $this->errores = array();
	}

	function mostrarHomeColecciones($usuario, $comentariosUser, $likes,$colecciones,$favoritos,$informacion){
	   //USUARIO
	  $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('usuario', $usuario);
	  $this->smarty->assign('comentariosUser', $comentariosUser);
	  $this->smarty->assign('likes', $likes);
	  $this->smarty->assign('colecciones', $colecciones);
	  $this->smarty->assign('favoritos',$favoritos);
	  $this->smarty->assign('informacion', $informacion);
	  

	  $this->smarty->display('colecciones.tpl');
	}
	
	function mostrarHomeComentarios($usuario,$comentarios){
		 
	  //HOME

		$this->smarty->assign('comentarios', $comentarios);

		$this->smarty->display('comentarios.tpl');
	}
	

	function mostrarHomeAdmin($usuario, $comentariosUser, $likes, $informacion,$slides){
	  //USUARIO
	  $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('usuario', $usuario);
	  $this->smarty->assign('comentariosUser', $comentariosUser);
	  $this->smarty->assign('likes', $likes);
	  //HOME
	  $this->smarty->assign('slides', $slides);
	  $this->smarty->assign('informacion', $informacion);
	  $this->smarty->display('index.tpl');
	}
	
function mostrarHomePortfolios($usuario, $comentariosUser, $likes,$informacion,$portfolios){
		  //USUARIO
	  $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('usuario', $usuario);
	  $this->smarty->assign('comentariosUser', $comentariosUser);
	  $this->smarty->assign('likes', $likes);
	  //HOME
		$this->smarty->assign('informacion', $informacion);
		$this->smarty->assign('portfolios', $portfolios);
		$this->smarty->display('portfolios.tpl');
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