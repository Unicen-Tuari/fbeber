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

  public function inicio(){
    $this->view->mostrarInicio();
  }

  public function actividades(){
    $actividades = $this->model->getActividades();
    $this->view->mostrarActividades($actividades);
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
