<?php
require('libs/Smarty.class.php');

/**
 * clase noticia de la vista
 */
class view
{
  private $smarty;

  public function __construct(){
    $this->smarty=new Smarty;
    //$this->smarty->debugging = true;
  }

  public function mostrarInicio(){
    $this->smarty->display('index.tpl');
  }

  public function mostrarActividades($actividades, $profesores){
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->assign('profesores',$profesores);
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
