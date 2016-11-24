<?php
require_once('view.php');

class view_usuario extends view{

public function mostrarCuenta($usuario){
    $this->smarty->assign("usuario",$usuario);
    $this->smarty->display('cuenta.tpl');
  } 

/*public function mostrarCuenta($usuario,$miscomentarios,$misactividades){
	$this->smarty->assign("miscomentarios",$miscomentarios);
	$this->smarty->assign("misactividades",$misactividades);
    $this->smarty->assign("usuario",$usuario);
    $this->smarty->display('cuenta.tpl');
  }*/ 

}
?>