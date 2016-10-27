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
    $actividades = $this->model->getActividades();
    $this->view->mostrarActividades($actividades);
  }
  
  public function profeact(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $actividad = $this->model->getActividad($id);
      $profeact = $this->model->getProfeact($id);
      $this->view->mostrarProfeact($profeact,$actividad);
    }
  } 

  public function nosotros(){
    $profesores = $this->model->getProfesores();
    $this->view->mostrarProfesores($profesores);
  }

  public function contacto(){
    $this->view->mostrarContacto();
  }

}

?>
