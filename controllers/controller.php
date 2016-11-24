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
    {
        $email=$_SESSION['email'];
        $usuario = $this->model->getUser($email);
        $this->view->mostrarIncludes($usuario);
    }
    else
    {
      $this->view->mostrarIncludes(null);
    }
  }

  public function inicio(){
    $this->view->mostrarInicio();
  }
  
  //mostrar todos comentarios por actividad
  public function comentarios(){
    if(isset($_REQUEST['id_act_c'])){
      $id=$_REQUEST['id_act_c'];
      $comact = $this->model->getComact($id);
      $this->view->mostrarComentarios($comact);
    }
  }

  public function actividades(){
    $usuarios = $this->model->getUsuarios();
    $actividades = $this->model->getActividades();
    session_start();
    if(isset($_SESSION["email"]))
    {
    $email=$_SESSION['email'];
    $usuario = $this->model->getUser($email);
    $this->view->mostrarActividades($actividades,$usuarios,$usuario);
  }
    else{
    $this->view->mostrarActividades($actividades,$usuarios,null);}
    }
  
  
  public function profeact(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $usuarios = $this->model->getUsuarios();
      $actividad = $this->model->getActividad($id);
      $profeact = $this->model->getProfeact($id);
      session_start();
      if(isset($_SESSION["email"]))
      {
        $email=$_SESSION['email'];
        $usuario = $this->model->getUser($email);
        $this->view->mostrarProfeact($profeact,$actividad,$usuarios,$usuario);
      }
    else{
      $this->view->mostrarProfeact($profeact,$actividad,$usuarios,null);
    }
  }
  } 

  public function nosotros(){
    $profesores = $this->model->getProfesores();
    $this->view->mostrarProfesores($profesores);
  }

  public function opiniones(){
    $comentarios = $this->model->getComentarios();
    $this->view->mostrarOpiniones($comentarios);
  }

  public function contacto(){
    $this->view->mostrarContacto();
  }

  

}

?>
