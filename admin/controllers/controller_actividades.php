<?php
require_once('controller.php');
require('views/view_actividades.php');
require('models/model_actividades.php');

class controller_actividades
{
  private $view_actividades;
  private $model_actividades;

  public function __construct(){
    $this->view_actividades = new view_actividades();
    $this->model_actividades = new model_actividades();
  }
  //consulta todas las actividades
  public function actividades(){
    $actividades = $this->model_actividades->getActividades();
    $this->view_actividades->mostrarActividades($actividades);
  }


//consulta una actividad en especial
  public function actividad(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $actividad = $this->model_actividades->getActividad($id);
      $this->view_actividades->mostrarActividad($actividad);
    }
  } 

//consulta profesores por actividad
  public function profeact(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $actividad = $this->model_actividades->getActividad($id);
      $profeact = $this->model_actividades->getProfeact($id);
      $this->view_actividades->mostrarProfeact($profeact,$actividad);
    }
  } 

//ABM ACTIVIDADES

//agrega
  public function agregarActividad(){
    if(isset($_REQUEST['new_nombre_act']) && isset($_REQUEST['new_descripcion_act']) && isset($_FILES['imagesToUpload'])){
        $this->model_actividades->agregarActividad($_REQUEST['new_nombre_act'], $_REQUEST['new_descripcion_act'],$_FILES['imagesToUpload']);      
      }
    else{
      $this->view_actividades->mostrarError('cuack');
    }
    $this->actividades();
  }

//borra
  public function borrarActividad(){
    if(isset($_REQUEST['id_act'])){
      $this->model_actividades->borrarActividad($_REQUEST['id_act']);
    }
    else{
      $this->view_actividades->mostrarError('La actividad que intenta borrar no existe');
    }
    $this->actividades();
  }

//modifica
  public function modificarActividad(){
    if(isset($_REQUEST['upd_nombre_a']) && isset($_REQUEST['upd_descripcion_a']) && isset($_FILES['imagesToUpload']) && isset($_REQUEST['id_act'])){
      $this->model_actividades->modificarActividad($_REQUEST['upd_nombre_a'], $_REQUEST['upd_descripcion_a'], $_FILES['imagesToUpload'],$_REQUEST['id_act']);
    }   
    else{
      $this->view_actividades->mostrarError('La actividad que intenta modificar no existe');
    }
    $this->actividades();
  }

}
?>