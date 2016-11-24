<?php
require('libs/Smarty.class.php');


class view
{
  public $smarty;

  public function __construct(){
    $this->smarty=new Smarty;
  }

  public function mostrarIncludes($usuario){
    $this->smarty->assign("usuario",$usuario);
    $this->smarty->display('include.tpl');
  }

  public function mostrarInicio(){
    $this->smarty->display('index.tpl');
  }

  public function mostrarActividades($actividades,$usuarios,$usuario){
    $this->smarty->assign('usuario',$usuario);
    $this->smarty->assign('usuarios',$usuarios);
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->display('actividades.tpl');
  }
  //muestra los profesores por actividad y los horarios
  public function mostrarProfeact($profeact,$actividad,$usuarios,$usuario){
    $this->smarty->assign('usuario',$usuario);
    $this->smarty->assign('usuarios',$usuarios);
    $this->smarty->assign('actividad',$actividad);
    $this->smarty->assign('profeact',$profeact);
    $this->smarty->display('profe_act.tpl');
  }
  //muestra todos los profesores
  public function mostrarProfesores($profesores){
    $this->smarty->assign('profesores',$profesores);
    $this->smarty->display('nosotros.tpl');
  }
  //muestra comentarios por actividad
  public function mostrarComentarios($comact){
    $this->smarty->assign('comact',$comact);
    $this->smarty->display('com_act.tpl');
  }
  public function mostrarOpiniones($comentarios){
    $this->smarty->assign('comentarios',$comentarios);
    $this->smarty->display('comentarios.tpl');
  }

  
  public function mostrarContacto(){
    $this->smarty->display('contacto.tpl');
  }

}



 ?>
