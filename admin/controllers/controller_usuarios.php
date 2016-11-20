<?php
require('views/view_usuarios.php');
require('models/model_usuarios.php');

class controller_usuarios
{
  private $view_usuarios;
  private $model_usuarios;

  public function __construct(){
    $this->view_usuarios = new view_usuarios();
    $this->model_usuarios = new model_usuarios();
  }

//consulta usuarios correspondiente
  public function usuarios(){
    //$actividades = $this->model_usuarios->getActividades();
    $usuarios = $this->model_usuarios->getUsuarios();
    $this->view_usuarios->mostrarUsuarios($usuarios);
  }

//consulta por los comentarios de un usuario
  public function comentariosusuario(){
    if(isset($_REQUEST['id_usuario'])){
      $id=$_REQUEST['id_usuario'];
      $usuario = $this->model_usuarios->getUsuario($id);
      $comusuario = $this->model_usuarios->getComusuario($id);
      $this->view_usuarios->mostrarComusuario($comusuario,$usuario);
    }
  } 

//BORRAR consulta de usuarios
  public function usuario(){
    if(isset($_REQUEST['id_usuario'])){
      $id=$_REQUEST['id_usuario'];
      $usuario = $this->model_usuarios->getUsuario($id);
      $this->view_usuarios->mostrarUsuario($usuario);
    }
  } 
  public function borrarUsuario(){
    if(isset($_REQUEST['id_usuario'])){
      $this->model_usuarios->borrarUsuario($_REQUEST['id_usuario']);
    }
    else{
      $this->view_usuarios->mostrarError('El Usuario que intenta borrar no existe');
    }
    $this->usuarios();
  }
}
?>