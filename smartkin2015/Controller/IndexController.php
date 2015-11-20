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

//MOSTRAR PAGINA
	public function mostrarHomeAdmin()
	{
		session_start();
		if(isset($_SESSION["email_user"]))
		{
      $this->view->mostrarHomeAdmin($this->model->getAdmin($_SESSION["email_user"]), $this->model->getComentariosUser($_SESSION["email_user"]), $this->model->getLikes($_SESSION["email_user"]),$this->model->getPortfolios(),$this->model->getColecciones(),$this->model->getComentarios(),$this->model->getInformacion(),$this->model->getFavoritos());
    }
		else
		{	
      $this->view->mostrarHomeAdmin(null,null,null,$this->model->getPortfolios(),$this->model->getColecciones(),$this->model->getComentarios(),$this->model->getInformacion(),$this->model->getFavoritos());
		}
	}

//AGREGAR USUARIO
  function agregarUsuario(){
    if(isset($_REQUEST['new_email']) && isset($_REQUEST['new_name']) && isset($_REQUEST['new_pass'])){
        $this->model->agregarUsuario(($_REQUEST['new_email']),($_REQUEST['new_name']),md5($_REQUEST['new_pass']));
        
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->mostrarHomeAdmin();
  }
  
 function modificarNameUser(){
    if(isset($_REQUEST['upd_name']) && isset($_REQUEST['id_user'])){
      $this->model->modificarNameUser($_REQUEST['upd_name'],$_REQUEST['id_user']);
    }
    
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeAdmin();
  }


function modificarPassUser(){
    if(isset($_REQUEST['upd_pass']) && isset($_REQUEST['id_user'])){
      $this->model->modificarPassUser(md5($_REQUEST['upd_pass']),$_REQUEST['id_user']);
    }
    
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeAdmin();
  }





//ENVIO DE MAIL
public function enviaMail($datos)
  {
    $para = 'florenciadaianabeber@gmail.com';
    $asunto = "Consulta de $datos[nombre_apellido]";
    $mensaje = "<!DOCTYPE html><html><head><title>TT Taller de Reparacion</title><meta charset='UTF-8'></head><body><ul><li>Nombre y Apellido: $datos[nombre_apellido]</li><br><li>Telefono: $datos[telefono]</li><br><li>Mail: $datos[mail]</li><br><li>Consulta: $datos[consulta]</li><br></ul></body></html>";
    $headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    if(mail($para,$asunto,$mensaje,$headers))
    {
      $this->view->generaAlerta();
    }
  }
//COLECCIONES

  function borrarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->borrarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeAdmin();
  }
//COMENTARIOS
//borrar
	function borrarComentario(){
    if(isset($_REQUEST['id_com'])){
      $this->model->borrarComentario($_REQUEST['id_com']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeAdmin();
  }
//agregar
   function agregarComentario(){
    if(isset($_REQUEST['new_fk_user']) && isset($_REQUEST['new_com'])){
        $this->model->agregarComentario($_REQUEST['new_fk_user'],$_REQUEST['new_com']);
        
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->mostrarHomeAdmin();
  }

//FAVORITOS
//agregar a favoritos
   function agregarFavorito(){
    if(isset($_REQUEST['new_fk_user']) && isset($_REQUEST['new_fk_mod'])){
        $this->model->agregarFavorito($_REQUEST['new_fk_user'],$_REQUEST['new_fk_mod']);
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->mostrarHomeAdmin();
  }

//sacar de favorito
  function borrarLike(){
    if(isset($_REQUEST['id_like'])){
      $this->model->borrarLike($_REQUEST['id_like']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeAdmin();
  }
}
?>