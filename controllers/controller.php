<?php
require('views/view.php');
require('models/model.php');

class controller
{
  private $view;
  private $model;

  public function __construct(){
    $this->view = new view();
    $this->model = new model();
  }

  public function includes(){
    $this->view->mostrarIncludes();
  }

  public function inicio(){
    $this->view->mostrarInicio();
  }

  public function actividades(){
    $usuarios = $this->model->getUsuarios();
    $actividades = $this->model->getActividades();
    $this->view->mostrarActividades($actividades,$usuarios);
  }
  
  public function profeact(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $usuarios = $this->model->getUsuarios();
      $actividad = $this->model->getActividad($id);
      $profeact = $this->model->getProfeact($id);
      $this->view->mostrarProfeact($profeact,$actividad,$usuarios);
    }
  } 

  public function nosotros(){
    $profesores = $this->model->getProfesores();
    $this->view->mostrarProfesores($profesores);
  }

  public function contacto(){
    $this->view->mostrarContacto();
  }

  //inscribir
  public function inscribir(){
    if(isset($_REQUEST['new_idProfe_i']) && isset($_REQUEST['new_idUser_i'])){
        $this->model->agregaInscripcion($_REQUEST['new_idProfe_i'],$_REQUEST['new_idUser_i']); 
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->actividades();
  }
  //desinscribir
  public function desinscribir(){
    if(isset($_REQUEST['id_i'])){
        $this->model->borraInscripcion($_REQUEST['id_i']); 
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->actividades();
  }

}

?>
