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
  
  public function actividad(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $actividad = $this->model->getActividad($id);
      $this->view->mostrarActividad($actividad);
    }
  } 

  public function profeact(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $actividad = $this->model->getActividad($id);
      $profeact = $this->model->getProfeact($id);
      $this->view->mostrarProfeact($profeact,$actividad);
    }
  } 

  public function profesores(){
    $actividades = $this->model->getActividades();
    $profesores = $this->model->getProfesores();
    $this->view->mostrarProfesores($profesores,$actividades);
  }

  public function contacto(){
    $this->view->mostrarContacto();
  }


//ABM ACTIVIDADES
  public function agregarActividad(){  
    if(isset($_REQUEST['new_nombre_act']) && isset($_REQUEST['new_descripcion_act']) && isset($_FILES['imagesToUpload'])){
        $this->model->agregarActividad($_REQUEST['new_nombre_act'], $_REQUEST['new_descripcion_act'],$_FILES['imagesToUpload']);    

      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->actividades();
  }

  public function borrarActividad(){
    if(isset($_REQUEST['id_act'])){
      $this->model->borrarActividad($_REQUEST['id_act']);
    }
    else{
      $this->view->mostrarError('La actividad que intenta borrar no existe');
    }
    $this->actividades();
  }

  public function modificarActividad(){
    if(isset($_REQUEST['upd_nombre']) && isset($_REQUEST['upd_descripcion']) && isset($_REQUEST['id_act'])){
      $this->model->modificarActividad($_REQUEST['upd_nombre'], $_REQUEST['upd_descripcion'],$_REQUEST['id_act']);
    }   
    else{
      $this->view->mostrarError('La actividad que intenta realizar no existe');
    }
    $this->actividades();
  }

//ABM PROFESORES
  public function agregarProfesor(){
    if(isset($_REQUEST['new_nombre_p']) && isset($_REQUEST['new_apellido_p']) && isset($_REQUEST['new_dni_p']) && isset($_FILES['imagesToUpload']) && isset($_REQUEST['new_descripcion_p']) && isset($_REQUEST['new_horarios_p']) && isset($_REQUEST['new_id_act'])){
        $this->model->agregarProfesor($_REQUEST['new_nombre_p'], $_REQUEST['new_apellido_p'], $_REQUEST['new_dni_p'], $_FILES['imagesToUpload'], $_REQUEST['new_descripcion_p'], $_REQUEST['new_horarios_p'], $_REQUEST['new_id_act']);      
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->profesores();
  }
  public function borrarProfesor(){
    if(isset($_REQUEST['id_profe'])){
      $this->model->borrarProfesor($_REQUEST['id_profe']);
    }
    else{
      $this->view->mostrarError('El profesor que intenta borrar no existe');
    }
    $this->profesores();
  }

  public function modificarProfesor(){
    if(isset($_REQUEST['upd_nombre_p']) && isset($_REQUEST['upd_apellido_p']) && isset($_REQUEST['upd_dni_p']) && isset($_FILES['imagesToUpload']) && isset($_REQUEST['upd_descripcion_p']) && isset($_REQUEST['upd_id_act']) && isset($_REQUEST['upd_horarios_p']) && isset($_REQUEST['id_profe'])){
      $this->model->modificarProfesor($_REQUEST['upd_nombre_p'], $_REQUEST['upd_apellido_p'], $_REQUEST['upd_dni_p'], $_FILES['imagesToUpload'], $_REQUEST['upd_descripcion_p'], $_REQUEST['upd_horarios_p'], $_REQUEST['upd_id_act'], $_REQUEST['id_profe']);
    }   
    else{
      $this->view->mostrarError('El profesor que intenta modificar no existe');
    }
    $this->profesores();
  }
}

?>
