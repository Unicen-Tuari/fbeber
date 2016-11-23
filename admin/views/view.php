<?php
require('libs/Smarty.class.php');

class view
{
  public $smarty;

  public function __construct(){
    $this->smarty=new smarty;
  }

  public function mostrarIncludes($admin){
    $this->smarty->assign("admin",$admin);
    $this->smarty->display('include.tpl');
  }

  //muestra datos del usuario logueado en la pagina principal->NO ANDA
  public function mostrarInicio(){
    $this->smarty->display('index.tpl');
  }

  

}




 ?>
