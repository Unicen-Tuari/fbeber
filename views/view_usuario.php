<?php
require_once('view.php');

class view_usuario extends view{

public function mostrarUsuario(){
    $this->smarty->display('usuario.tpl');
  }

public function mostrarComentarios($comact){
    $this->smarty->assign('comact',$comact);
    $this->smarty->display('com_act.tpl');
  }

}
?>