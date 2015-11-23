<?php
include_once 'View/IndexView.php';
include_once 'Model/IndexModel.php';

class IndexController {

  private $model;
  private $view;

  function __construct() {
    $this->model = new IndexModel();
    $this->view = new IndexView();
  }

	
	public function mostrarHomeAdmin()
	{
		
		if(isset($_SESSION["email_admin"]))
		{
   
      	$this->view->mostrarHomeAdmin($this->model->getAdmin($_SESSION["email_admin"]), $this->model->getPortfolios(),$this->model->getColecciones(),$this->model->getComentarios(),$this->model->getInformacion(),$this->model->getUsuarios());
 
    	}
		else
		{
	   		
		$this->view->mostrarHomeAdmin(null, $this->model->getPortfolios(),$this->model->getColecciones(),$this->model->getComentarios(),$this->model->getInformacion(),$this->model->getUsuarios());
		}
	}

	
//COMENTARIOS
  function borrarComentario(){
    if(isset($_REQUEST['id_com'])){
      $this->model->borrarComentario($_REQUEST['id_com']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeAdmin();
  }

//USUARIO
  function habilitarUsuario(){
    if(isset($_REQUEST['id_user'])){
      $this->model->habilitarUsuario($_REQUEST['id_user']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeAdmin();
  }

  function NoHabilitarUsuario(){
    if(isset($_REQUEST['id_user'])){
      $this->model->NoHabilitarUsuario($_REQUEST['id_user']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeAdmin();
  }

//COLECCIONES
  function agregarColeccion(){
    if(isset($_REQUEST['col']) && isset($_FILES['imagesToUpload'])){
        $this->model->agregarColeccion($_REQUEST['col'],$_FILES['imagesToUpload']);
      }
    else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');
    }
    $this->mostrarHomeAdmin();
  }

  function borrarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->borrarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeAdmin();
  }

  function borrarModelo(){
    if(isset($_REQUEST['id_mod'])){
      $this->model->borrarModelo($_REQUEST['id_mod']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeAdmin();
  }

  function publicarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->publicarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeAdmin();
  }

  function noPublicarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->noPublicarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeAdmin();
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
    $this->mostrarHomeAdmin();
  }

  function borrarPortfolio(){
    if(isset($_REQUEST['id_port'])){
      $this->model->borrarPortfolio($_REQUEST['id_port']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeAdmin();
  }

  function borrarImgPortfolio(){
    if(isset($_REQUEST['id_img_port'])){
      $this->model->borrarImgPortfolio($_REQUEST['id_img_port']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeAdmin();
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