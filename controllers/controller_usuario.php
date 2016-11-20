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

public function usuario(){
    $this->view_usuario->mostrarUsuario();
  }

//mostrar comentarios
public function comentarios(){
    if(isset($_REQUEST['id_act_c'])){
      $id=$_REQUEST['id_act_c'];
      $comact = $this->model_usuario->getComact($id);
      $this->view_usuario->mostrarComentarios($comact);
    }
  }

/*usuarios*/
//agrega -> OK 
  public function agregarUsuario(){
    if(isset($_REQUEST['new_apyno_u']) && isset($_REQUEST['new_email_u']) && isset($_REQUEST['new_pass_u'])){
        $this->model_usuario->agregarUsuario($_REQUEST['new_apyno_u'], $_REQUEST['new_email_u'], $_REQUEST['new_pass_u']);      
      }
    else{
      $this->view_usuario->mostrarError('cuack');
    }
    $this->usuario();
  }

  public function agregarComentario(){
    if(isset($_REQUEST['new_comentario']) && isset($_REQUEST['new_puntaje']) && isset($_REQUEST['new_idAct_c']) && isset($_REQUEST['new_idUser_c'])){
        $this->model_usuario->agregarComentario($_REQUEST['new_comentario'],$_REQUEST['new_puntaje'], $_REQUEST['new_idAct_c'], $_REQUEST['new_idUser_c']);      
      }
    else{
      $this->view_usuario->mostrarError('cuack');
    }
    $this->actividades();
  }
}

?>