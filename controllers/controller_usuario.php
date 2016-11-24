<?php
require_once('controller.php');
require('views/view_usuario.php');
require('models/model_usuario.php');


class controller_usuario
{
  private $view_usuario;
  private $model_usuario;

  public function __construct(){
    $this->view_usuario = new view_usuario();
    $this->model_usuario = new model_usuario();
  }

public function cuenta(){//supuestamente se va a mostrar en mi sesion vemos como sale
    session_start();
    if(isset($_SESSION["email"]))
      {
        $email=$_SESSION['email'];
        $usuario = $this->model_usuario->getUser($email);
        $this->view_usuario->mostrarCuenta($usuario);
      }
      else{ 
        $this->view_usuario->mostrarCuenta(null);
      }
  }

/************************************************************************
/*usuarios*/
//agrega -> no funciona ver porque
  public function agregarUsuario(){
    if(isset($_REQUEST['new_apyno_u']) && isset($_REQUEST['new_email_u']) && isset($_REQUEST['new_pass_u'])){
        $this->model_usuario->agregarUsuario($_REQUEST['new_apyno_u'], $_REQUEST['new_email_u'], $_REQUEST['new_pass_u']);      
      }
    else{
      $this->view_usuario->mostrarError('cuack');
    }
    $this->usuario();
  }
  
//modifica usuario
  public function modificarUsuario(){
    if(isset($_REQUEST['upd_apyno_u']) && isset($_REQUEST['upd_email_u']) && isset($_REQUEST['upd_pass_u']) && isset($_REQUEST['upd_id_u'])){
        $this->model_usuario->modificarUsuario($_REQUEST['upd_apyno_u'], $_REQUEST['upd_email_u'],md5($_REQUEST['upd_pass_u']),$_REQUEST['upd_id_u']);
    }   
    else{
      $this->view_usuario->mostrarError('El profesor que intenta modificar no existe');
    }
    $this->usuario();
  }

/*********************************/
  public function agregarComentario(){
    if(isset($_REQUEST['new_comentario']) && isset($_REQUEST['new_puntaje']) && isset($_REQUEST['new_idAct_c']) && isset($_REQUEST['new_idUser_c'])){
        $this->model_usuario->agregarComentario($_REQUEST['new_comentario'],$_REQUEST['new_puntaje'], $_REQUEST['new_idAct_c'], $_REQUEST['new_idUser_c']);      
      }
    else{
      $this->view_usuario->mostrarError('cuack');
    }
    $this->actividades();
  }

  //inscribir
  public function inscribir(){
    if(isset($_REQUEST['new_idProfe_i']) && isset($_REQUEST['new_idUser_i'])){
        $this->model->agregaInscripcion($_REQUEST['new_idProfe_i'],$_REQUEST['new_idUser_i']); 
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->actividades();
  }
  //desinscribir
  public function desinscribir(){
    if(isset($_REQUEST['id_i'])){
        $this->model->borraInscripcion($_REQUEST['id_i']); 
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->actividades();
  }
}

?>