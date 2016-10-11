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

  public function profesores(){
    $profesores = $this->model->getProfesores();
        $actividades = $this->model->getActividades();

    $this->view->mostrarProfesores($profesores,$actividades);
  }

  public function contacto(){
    $this->view->mostrarContacto();
  }

//ABM ACTIVIDADES
  public function agregarActividad(){
    if(isset($_REQUEST['new_nombre_act']) && isset($_REQUEST['new_descripcion_act']) && isset($_REQUEST['new_foto_act'])){
        $this->model->agregarActividad($_REQUEST['new_nombre_act'], $_REQUEST['new_descripcion_act'],$_REQUEST['new_foto_act']);      
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
    if(isset($_REQUEST['upd_nombre']) && isset($_REQUEST['upd_descripcion']) && isset($_REQUEST['upd_diasHorarios']) && isset($_REQUEST['id_act'])){
      $this->model->modificarActividad($_REQUEST['upd_nombre'], $_REQUEST['upd_descripcion'], $_REQUEST['upd_diasHorarios'],$_REQUEST['id_act']);
    }   
    else{
      $this->view->mostrarError('La actividad que intenta realizar no existe');
    }
    $this->actividades();
  }

//ABM PROFESORES
  public function agregarProfesor(){
    if(isset($_REQUEST['new_nombre_p']) && isset($_REQUEST['new_apellido_p']) && isset($_REQUEST['new_dni_p']) && isset($_REQUEST['new_foto_p']) && isset($_REQUEST['new_descripcion_p']) && isset($_REQUEST['new_id_act'])){
        $this->model->agregarProfesor($_REQUEST['new_nombre_p'], $_REQUEST['new_apellido_p'], $_REQUEST['new_dni_p'], $_REQUEST['new_foto_p'], $_REQUEST['new_descripcion_p'], $_REQUEST['new_id_act']);      
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
    if(isset($_REQUEST['upd_nombre_p']) && isset($_REQUEST['upd_apellido_p']) && isset($_REQUEST['upd_dni_p']) && isset($_REQUEST['upd_foto_p']) && isset($_REQUEST['upd_descripcion_p']) && isset($_REQUEST['upd_id_act']) && isset($_REQUEST['id_profe'])){
      $this->model->modificarProfesor($_REQUEST['upd_nombre_p'], $_REQUEST['upd_apellido_p'], $_REQUEST['upd_dni_p'], $_REQUEST['upd_foto_p'], $_REQUEST['upd_descripcion_p'], $_REQUEST['upd_id_act'], $_REQUEST['id_profe']);
    }   
    else{
      $this->view->mostrarError('El profesor que intenta modificar no existe');
    }
    $this->profesores();
  }
}

?>
