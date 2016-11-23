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
    session_start();
    if(isset($_SESSION["email"]))
      {$this->view->mostrarIncludes($_SESSION["email"]);}
    else{ $this->view->mostrarIncludes(null);}
  }

  public function cuenta(){
    session_start();
    if(isset($_SESSION["email"]))
      {$this->view->mostrarCuenta($_SESSION["email"]);}
    else{ $this->view->mostrarCuenta(null);}
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

  public function opiniones(){
    $comentarios = $this->model->getComentarios();
    $this->view->mostrarComentarios($comentarios);
  }

  public function contacto(){
    $this->view->mostrarContacto();
  }

  

}

?>
