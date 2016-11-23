<?php
require('libs/Smarty.class.php');

class view
{
  public $smarty;

  public function __construct(){
    $this->smarty=new Smarty;
  }

  public function mostrarIncludes($admin){
    $smarty = new Smarty;
    $smarty->assign("admin",$admin);
    $this->smarty->display('include.tpl');
  }

  //muestra datos del usuario logueado en la pagina principal->NO ANDA
  public function mostrarInicio(){
    $smarty = new Smarty;
    $this->smarty->display('index.tpl');
  }

  

}




 ?>
