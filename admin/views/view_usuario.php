<?php
require_once('view.php');
  
class view_usuario extends view{

public function mostrarCuenta($usuario){
    $this->smarty->assign("usuario",$usuario);
    $this->smarty->display('cuenta.tpl');
  } 

public function mostrarMiscomentarios($miscomentarios){
	$this->smarty->assign("miscomentarios",$miscomentarios);
	$this->smarty->display("miscomentarios.tpl");
}
public function mostrarInfocomentario($comentario){
    $this->smarty->assign('comentario',$comentario);
    $this->smarty->display('borrar_comentario.tpl');
  }
public function mostrarMisactividades($misactividades){
	$this->smarty->assign("misactividades",$misactividades);
	$this->smarty->display("misactividades.tpl");
}
}
?>