<?php
require('libs/Smarty.class.php');


class view
{
  private $smarty;

  public function __construct(){
    $this->smarty=new Smarty;
  }

  public function mostrarInicio(){
    $this->smarty->display('index.tpl');
  }

  public function mostrarActividades($actividades){
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->display('actividades.tpl');
  }

  public function mostrarProfesores($profesores){
    $this->smarty->assign('profesores',$profesores);
    $this->smarty->display('nosotros.tpl');
  }

  public function mostrarContacto(){
    $this->smarty->display('contacto.tpl');
  }

}



 ?>
