<?php
require('libs/Smarty.class.php');

class view
{
  private $smarty;

  public function __construct(){
    $this->smarty=new Smarty;
  }
  
  public function mostrarIncludes(){
    $this->smarty->display('include.tpl');
  } 

  public function mostrarInicio(){
    $this->smarty->display('index.tpl');
  }

  public function mostrarActividades($actividades){
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->display('actividades.tpl');
  }

  public function mostrarActividad($actividad){
    $this->smarty->assign('actividad',$actividad);
    $this->smarty->display('modif_act.tpl');
  }

  public function mostrarProfeact($profeact,$actividad){
    $this->smarty->assign('profeact',$profeact);
    $this->smarty->assign('actividad',$actividad);
    $this->smarty->display('borrar_act.tpl');
  }

   public function mostrarProfesores($profesores,$actividades){
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->assign('profesores',$profesores);
    $this->smarty->display('profesores.tpl');
  }

  public function mostrarContacto(){
    $this->smarty->display('contacto.tpl');
  }
  
  function mostrarError($error){
    array_push($this->errores, $error);
  }

}



 ?>
