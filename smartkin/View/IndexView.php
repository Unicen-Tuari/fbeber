<?php
require('./libs/Smarty.class.php');

class IndexView
{
    function __construct(){
	  $this->smarty = new Smarty();
	  $this->errores = array();
	}

	function mostrarHomeAdmin($usuario, $comentariosUser, $likes, $portfolios, $colecciones, $comentarios, $informacion,$favoritos){
	  //USUARIO
	  $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('usuario', $usuario);
	  $this->smarty->assign('comentariosUser', $comentariosUser);
	  $this->smarty->assign('likes', $likes);
	  //HOME
	  $this->smarty->assign('portfolios', $portfolios);
	  $this->smarty->assign('comentarios', $comentarios);
	  $this->smarty->assign('colecciones', $colecciones);
	  $this->smarty->assign('informacion', $informacion);
	  $this->smarty->assign('favoritos',$favoritos);
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