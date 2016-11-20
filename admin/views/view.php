<?php
require('libs/Smarty.class.php');

class view
{
  public $smarty;

  public function __construct(){
    $this->smarty=new Smarty;
  }

  public function mostrarInicio(){
    $this->smarty->display('index.tpl');
  } 

  public function mostrarIncludes(){
    $smarty = new Smarty;
    $this->smarty->display('include.tpl');
  }

}




 ?>
