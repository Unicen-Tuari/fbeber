<?php
require_once('view.php');

class view_usuarios extends view{

//muestra todas las usuarios->OK
public function mostrarUsuarios($usuarios){
    $this->smarty->assign('usuarios',$usuarios);
    $this->smarty->display('usuarios.tpl');
  }

//muestra comentarios por usuario
public function mostrarComusuario($comusuario,$usuario){
	$this->smarty->assign('usuario',$usuario);
    $this->smarty->assign('comusuario',$comusuario);
    $this->smarty->display('comentarios_usuario.tpl');
  }

//muestra datos para borrar->OK
public function mostrarUsuario($usuario){
    $this->smarty->assign('usuario',$usuario);
    $this->smarty->display('borrar_usuario.tpl');
  }

}
?>