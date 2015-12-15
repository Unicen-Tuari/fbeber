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
	
  public function loginUsuario($formulario)
  {
      $error = $this->verificarFormulario($formulario);
    if(!$error)
    {
      $user = $this->model->getUsuario($formulario["email_user"]);
      
      if(empty($user))
      {
        $this->view->MensajeError("Error: Usuario Inexistente");
      }   
      if($user[0]["pass_user"] != md5($formulario["pass_user"]))
      {
        $this->view->MensajeError("Error: Password Inválida");
      }
      
      session_start();
      $_SESSION["email_user"]=$formulario["email_user"];

      $this->view->mostrarHomeAdmin($this->model->getAdmin($_SESSION["email_user"]), $this->model->getComentariosUser($_SESSION["email_user"]), $this->model->getLikes($_SESSION["email_user"]),$this->model->getInformacion(),$this->model->getSlides());
      
    }
    else
    {
     $this->view->mostrarHomeColecciones(null,null,null,$this->model->getColecciones(),$this->model->getFavoritos(),$this->model->getInformacion()); 
    }
    
  }
  
  private function verificarFormulario($formulario)
  {
    if(!$this->verificaremail($formulario["email_user"]))
      return "Error: Email Inválido";
    if(strlen($formulario["pass_user"])<=0)
      return "Error: La password es vacía";
  }
  
  private function verificaremail($email){ 
    if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
      return false; 
    } else { 
       return true; 
    } 
  }
  public function mostrarHomeColecciones()
  {
    session_start();
    if(isset($_SESSION["email_user"]))
    {
      $this->view->mostrarHomeColecciones($this->model->getAdmin($_SESSION["email_user"]), $this->model->getComentariosUser($_SESSION["email_user"]), $this->model->getLikes($_SESSION["email_user"]),$this->model->getColecciones(),$this->model->getFavoritos(),$this->model->getInformacion());
    }
    else
    {
     $this->view->mostrarHomeColecciones(null,null,null,$this->model->getColecciones(),$this->model->getFavoritos(),$this->model->getInformacion()); 
    }    
  }

  public function mostrarHomeComentarios()
  {
    session_start();
    if(isset($_SESSION["email_user"]))
    {
      $this->view->mostrarHomeComentarios($this->model->getAdmin($_SESSION["email_user"]),$this->model->getComentarios());
    }
    else
    {
     $this->view->mostrarHomeComentarios(null,$this->model->getComentarios()); 
    }    
  }

  public function mostrarHomeAdmin()
	{
		session_start();
		if(isset($_SESSION["email_user"]))
		{
      $this->view->mostrarHomeAdmin($this->model->getAdmin($_SESSION["email_user"]), $this->model->getComentariosUser($_SESSION["email_user"]), $this->model->getLikes($_SESSION["email_user"]),$this->model->getInformacion(),$this->model->getSlides());
    }
		else
		{	
      $this->view->mostrarHomeAdmin(null,null,null,$this->model->getInformacion(),$this->model->getSlides());
		  
    }
	}
  //PORTFOLIOS
   public function mostrarHomePortfolios()
  {
    session_start();
    if(isset($_SESSION["email_user"]))
    {
      $this->view->mostrarHomePortfolios($this->model->getAdmin($_SESSION["email_user"]), $this->model->getComentariosUser($_SESSION["email_user"]), $this->model->getLikes($_SESSION["email_user"]),$this->model->getInformacion(),$this->model->getPortfolios());    
    }
    else{
      $this->view->mostrarHomePortfolios(null,null,null,$this->model->getInformacion(),$this->model->getPortfolios());    

    }
  }
  

/*funciones*/
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

//MODIFICAR DATOS USUARIO
function agregarImgUser(){
    if(isset($_FILES['imagesToUpload']) && isset($_REQUEST['id_user']) ){
        $this->model->agregarImgUser($_FILES['imagesToUpload'],$_REQUEST['id_user']);
      }
    else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');
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
    $asunto = "Smartkin - Consulta de $datos[nombre_apellido]";
    $mensaje = "<!DOCTYPE html><html><head><title>Smartkin</title><meta charset='UTF-8'></head><body><ul><li>Nombre y Apellido: $datos[nombre_apellido]</li><br><li>Telefono: $datos[telefono]</li><br><li>Mail: $datos[mail]</li><br><li>Consulta: $datos[consulta]</li><br></ul></body></html>";
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
//agregar
   function agregarComentario(){
    if(isset($_REQUEST['new_fk_user']) && isset($_REQUEST['new_com'])){
        $this->model->agregarComentario($_REQUEST['new_fk_user'],$_REQUEST['new_com']);    
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->mostrarHomeComentarios();
  }
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
//modificar
  function modificarComentario(){
    if(isset($_REQUEST['upd_com']) && isset($_REQUEST['id_com'])){
      $this->model->modificarComentario($_REQUEST['upd_com'],$_REQUEST['id_com']);
    }
    
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
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
    $this->mostrarHomeColecciones();
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