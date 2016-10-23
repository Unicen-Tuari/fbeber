<?php
require('views/view_profesores.php');
require('models/model_profesores.php');

class controller_profesores
{
  private $view_profesores;
  private $model_profesores;

  public function __construct(){
    $this->view_profesores = new view_profesores();
    $this->model_profesores = new model_profesores();
  }

//consulta profesores profesores por actividad
  public function profesores(){
    $actividades = $this->model_profesores->getActividades();
    $profesores = $this->model_profesores->getProfesores();
    if(isset($_REQUEST['id_profesor'])){
      $id=$_REQUEST['id_profesor'];
      $profesor = $this->model_profesores->getProfesor($id);
      //$this->view->mostrarProfesor($profesor);
        $this->view_profesores->mostrarProfesores($profesores,$actividades,$profesor);
      }
      else{
      $this->view_profesores->mostrarProfesores($profesores,$actividades,null);
    }
  }
  
//consulta de profesores
  public function profesor(){
    if(isset($_REQUEST['id_profesor'])){
      $id=$_REQUEST['id_profesor'];
      $profesor = $this->model_profesores->getProfesor($id);
      $this->view_profesores->mostrarProfesor($profesor);
    }
  } 



//ABM PROFESORES

//agrega
  public function agregarProfesor(){
    if(isset($_REQUEST['new_nombre_p']) && isset($_REQUEST['new_apellido_p']) && isset($_REQUEST['new_dni_p']) && isset($_FILES['imagesToUpload']) && isset($_REQUEST['new_descripcion_p']) && isset($_REQUEST['new_horarios']) && isset($_REQUEST['new_id_act'])){
        $this->model_profesores->agregarProfesor($_REQUEST['new_nombre_p'], $_REQUEST['new_apellido_p'], $_REQUEST['new_dni_p'], $_FILES['imagesToUpload'], $_REQUEST['new_descripcion_p'], $_REQUEST['new_horarios'], $_REQUEST['new_id_act']);      
      }
    else{
      $this->view_profesores->mostrarError('cuack');
    }
    $this->profesores();
  }

//borra
  public function borrarProfesor(){
    if(isset($_REQUEST['id_profesor'])){
      $this->model_profesores->borrarProfesor($_REQUEST['id_profesor']);
    }
    else{
      $this->view_profesores->mostrarError('El profesor que intenta borrar no existe');
    }
    $this->profesores();
  }

//modifica
  public function modificarProfesor(){
    if(isset($_REQUEST['upd_nombre_p']) && isset($_REQUEST['upd_apellido_p']) && isset($_REQUEST['upd_dni_p']) && isset($_FILES['imagesToUpload']) && isset($_REQUEST['upd_descripcion_p']) && isset($_REQUEST['upd_horarios'])  && isset($_REQUEST['upd_id_act']) && isset($_REQUEST['id_profe'])){
        $this->model_profesores->modificarProfesor($_REQUEST['upd_nombre_p'], $_REQUEST['upd_apellido_p'], $_REQUEST['upd_dni_p'], $_FILES['imagesToUpload'], $_REQUEST['upd_descripcion_p'],$_REQUEST['upd_horarios'], $_REQUEST['upd_id_act'], $_REQUEST['id_profe']);
    }   
    else{
      $this->view_profesores->mostrarError('El profesor que intenta modificar no existe');
    }
    $this->profesores();
  }
}
?>