<?php
include_once 'view.php';
include_once 'model.php';

class Controller {

  private $model;
  private $view;

  function __construct() {
    $this->model = new Model();
    $this->view = new View();
  }

  function mostrarHome(){
    $this->view->mostrarHome($this->model->getPortfolios(),$this->model->getColecciones(),$this->model->getComentarios(),$this->model->getInformacion());
   }

//COMENTARIOS
  function borrarComentario(){
    if(isset($_REQUEST['id_com'])){
      $this->model->borrarComentario($_REQUEST['id_com']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHome();
  }

//USUARIO
  function habilitarUsuario(){
    if(isset($_REQUEST['id_user'])){
      $this->model->habilitarUsuario($_REQUEST['id_user']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHome();
  }

  function NoHabilitarUsuario(){
    if(isset($_REQUEST['id_user'])){
      $this->model->NoHabilitarUsuario($_REQUEST['id_user']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHome();
  }

//COLECCIONES
  function agregarColeccion(){
    if(isset($_REQUEST['col']) && isset($_FILES['imagesToUpload'])){
        $this->model->agregarColeccion($_REQUEST['col'],$_FILES['imagesToUpload']);
      }
    else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');
    }
    $this->mostrarHome();
  }

  function borrarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->borrarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHome();
  }

  function borrarModelo(){
    if(isset($_REQUEST['id_mod'])){
      $this->model->borrarModelo($_REQUEST['id_mod']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHome();
  }

  function publicarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->publicarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHome();
  }

  function noPublicarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->noPublicarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHome();
  }

  function agregarModelos(){
    if(isset($_REQUEST['id_col']) && isset($_FILES)){
      $this->model->agregarModelos($_REQUEST['id_col'],$_FILES);
      echo '{ "result" :  "OK" }';
    }else{
      echo '{ "result" :  "Faltan paramentros" }';
    }
  }
//PORTFOLIO
  function agregarPortfolio(){
    if(isset($_REQUEST['port']) && isset($_FILES['imagesToUpload'])){
        $this->model->agregarPortfolio($_REQUEST['port'],$_FILES['imagesToUpload']);
      }
    else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');
    }
    $this->mostrarHome();
  }

  function borrarPortfolio(){
    if(isset($_REQUEST['id_port'])){
      $this->model->borrarPortfolio($_REQUEST['id_port']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHome();
  }

  function borrarImgPortfolio(){
    if(isset($_REQUEST['id_img_port'])){
      $this->model->borrarImgPortfolio($_REQUEST['id_img_port']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHome();
  }

  function agregarImgPortfolio(){
    if(isset($_REQUEST['id_port']) && isset($_FILES)){
      $this->model->agregarImgPortfolio($_REQUEST['id_port'],$_FILES);
      echo '{ "result" :  "OK" }';
    }else{
      echo '{ "result" :  "Faltan paramentros" }';
    }
  }


	private function verificarFormulario($formulario)
	{
		if(!$this->verificaremail($formulario["new_email"]))
			return "Error: Email Inválido";
		//Cualquier verificacion del formulario		
	}
	
	private function verificaremail($email){ 
	  if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
		  return false; 
	  } else { 
		   return true; 
	  } 
	}
}
?>