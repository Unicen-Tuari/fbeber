<?php
require('libs/Smarty.class.php');

class view
{
  public $smarty;

  public function __construct(){
    $this->smarty=new Smarty;
  }


  public function mostrarIncludes(){
    $this->smarty->display('include.tpl');
  } 

  public function mostrarInicio(){
    $this->smarty->display('index.tpl');
  }


  public function mostrarContacto(){
    $this->smarty->display('contacto.tpl');
  }
}




 ?>
