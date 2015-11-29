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

//usuarios
  public function mostrarHomeUsuarios()
  {
    
    if(isset($_SESSION["email_admin"]))
    {
        $this->view->mostrarHomeUsuarios($this->model->getUsuarios());
      }
    else
    {
        
    $this->view->mostrarHomeUsuarios($this->model->getUsuarios());
    }
  }

//mostrar colecciones
  public function mostrarHomeColecciones()
  {
    
    if(isset($_SESSION["email_admin"]))
    {
        $this->view->mostrarHomeColecciones($this->model->getColecciones());
      }
    else
    {
        
    $this->view->mostrarHomeColecciones($this->model->getColecciones());
    }
  }
//mostrar comentarios
  public function mostrarHomeComentarios()
  {
    
    if(isset($_SESSION["email_admin"]))
    {
        $this->view->mostrarHomeComentarios($this->model->getComentarios());
      }
    else
    {
        
    $this->view->mostrarHomeComentarios($this->model->getComentarios());
    }
  }

//mostrar portfolios
  public function mostrarHomePortfolios()
  {
    
    if(isset($_SESSION["email_admin"]))
    {
        $this->view->mostrarHomePortfolios($this->model->getPortfolios());
      }
    else
    {
        
    $this->view->mostrarHomePortfolios($this->model->getPortfolios());
    }
  }

//mostrar info
  public function mostrarHomeInfo()
  {
    
    if(isset($_SESSION["email_admin"]))
    {
        $this->view->mostrarHomeInfo($this->model->getInformacion());
      }
    else
    {
        
    $this->view->mostrarHomeInfo($this->model->getInformacion());
    }
  }

  

	
	public function mostrarHomeAdmin()
	{
		
		if(isset($_SESSION["email_admin"]))
		{
      	$this->view->mostrarHomeAdmin($this->model->getAdmin($_SESSION["email_admin"]));
    	}
		else
		{
	   		
		$this->view->mostrarHomeAdmin(null);
		}
	}

//INFORMACION
//agregar
  function agregarInfo(){
    if(isset($_REQUEST['new_email']) && isset($_REQUEST['new_tel']) && isset($_REQUEST['new_wh']) && isset($_REQUEST['new_dir']) && isset($_REQUEST['new_fb']) && isset($_REQUEST['new_tw']) && isset($_REQUEST['new_g']) && isset($_REQUEST['new_mercado']) && isset($_REQUEST['new_olx'])){
        $this->model->agregarInfo(($_REQUEST['new_email']),($_REQUEST['new_tel']),($_REQUEST['new_wh']),($_REQUEST['new_dir']),($_REQUEST['new_fb']),($_REQUEST['new_tw']),($_REQUEST['new_g']),($_REQUEST['new_mercado']),($_REQUEST['new_olx']));      
      }
    else{
      $this->view->mostrarError('cuack');
    }
    $this->mostrarHomeInfo();
  }
//borrar
  function borrarInfo(){
    if(isset($_REQUEST['id_info'])){
      $this->model->borrarInfo($_REQUEST['id_info']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeInfo();
  }
//modicar
  function modificarInfo(){
    if(isset($_REQUEST['upd_email']) && isset($_REQUEST['upd_tel']) && isset($_REQUEST['upd_wh']) && isset($_REQUEST['upd_dir']) && isset($_REQUEST['upd_fb']) && isset($_REQUEST['upd_tw']) && isset($_REQUEST['upd_g']) && isset($_REQUEST['upd_mercado']) && isset($_REQUEST['upd_olx']) && isset($_REQUEST['id_info'])){
      $this->model->modificarInfo($_REQUEST['upd_email'],$_REQUEST['upd_tel'],$_REQUEST['upd_wh'],$_REQUEST['upd_dir'],$_REQUEST['upd_fb'],$_REQUEST['upd_tw'],$_REQUEST['upd_g'],$_REQUEST['upd_mercado'],$_REQUEST['upd_olx'],$_REQUEST['id_info']);
    }   
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeInfo();
  }
//COMENTARIOS
  function borrarComentario(){
    if(isset($_REQUEST['id_com'])){
      $this->model->borrarComentario($_REQUEST['id_com']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeComentarios();
  }

//USUARIO
  function habilitarUsuario(){
    if(isset($_REQUEST['id_user'])){
      $this->model->habilitarUsuario($_REQUEST['id_user']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeUsuarios();
  }

  function NoHabilitarUsuario(){
    if(isset($_REQUEST['id_user'])){
      $this->model->NoHabilitarUsuario($_REQUEST['id_user']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeUsuarios();
  }

//COLECCIONES
//agregar
  function agregarColeccion(){
    if(isset($_REQUEST['col']) && isset($_FILES['imagesToUpload'])){
        $this->model->agregarColeccion($_REQUEST['col'],$_FILES['imagesToUpload']);
      }
    else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');
    }
    $this->mostrarHomeColecciones();
  }
//borrar
  function borrarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->borrarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeColecciones();
  }
//modificar
  function modificarNameCol(){
    if(isset($_REQUEST['upd_name_col']) && isset($_REQUEST['id_col'])){
      $this->model->modificarNameCol($_REQUEST['upd_name_col'],$_REQUEST['id_col']);
    }   
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeColecciones();
  }
//MODELOS
   function agregarModelos(){
    if(isset($_REQUEST['id_col']) && isset($_FILES['imagesToUpload'])){
        $this->model->agregarModelos($_REQUEST['id_col'],$_FILES['imagesToUpload']);
      }
    else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');
    }
    $this->mostrarHomeColecciones();
  }
  function borrarModelo(){
    if(isset($_REQUEST['id_mod'])){
      $this->model->borrarModelo($_REQUEST['id_mod']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomeColecciones();
  }

  function publicarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->publicarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeColecciones();
  }

  function noPublicarColeccion(){
    if(isset($_REQUEST['id_col'])){
      $this->model->noPublicarColeccion($_REQUEST['id_col']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomeColecciones();
  }


//PORTFOLIO
//agregar
  function agregarPortfolio(){
    if(isset($_REQUEST['port']) && isset($_FILES['imagesToUpload'])){
        $this->model->agregarPortfolio($_REQUEST['port'],$_FILES['imagesToUpload']);
      }
    else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');
    }
    $this->mostrarHomePortfolios();
  }
//borrar
  function borrarPortfolio(){
    if(isset($_REQUEST['id_port'])){
      $this->model->borrarPortfolio($_REQUEST['id_port']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomePortfolios();
  }
//modificar
  function modificarNamePort(){
    if(isset($_REQUEST['upd_name_port']) && isset($_REQUEST['id_port'])){
      $this->model->modificarNamePort($_REQUEST['upd_name_port'],$_REQUEST['id_port']);
    }   
    else{
      $this->view->mostrarError('La tarea que intenta realizar no existe');
    }
    $this->mostrarHomePortfolios();
  }

  function borrarImgPortfolio(){
    if(isset($_REQUEST['id_img_port'])){
      $this->model->borrarImgPortfolio($_REQUEST['id_img_port']);
    }
    else{
      $this->view->mostrarError('La tarea que intenta borrar no existe');
    }
    $this->mostrarHomePortfolios();
  }

  function agregarImgPort(){
    if(isset($_REQUEST['id_port']) && isset($_FILES['imagesToUpload'])){
        $this->model->agregarImgPort($_REQUEST['id_port'],$_FILES['imagesToUpload']);
      }
    else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');
    }
    $this->mostrarHomePortfolios();
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