<?php
  
include 'Controller/IndexController.php';
include_once 'config/config_app.php';

$model = new IndexModel();
$view = new IndexView();
$controller = new IndexController($model, $view);

if(isset($_POST["email_user"]) && isset($_POST['pass_user']))
{
  $formulario["email_user"] = $_POST["email_user"];
  $formulario["pass_user"] = $_POST["pass_user"];
  $controller->loginUsuario($formulario);
}
else if (isset($_POST["consulta"]))
  {
    $controller->enviaMail($_POST);
  }
else if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $controller = new IndexController();
  $controller->mostrarHomeAdmin();
}
else {
  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_BORRAR_COMENTARIO:
      $controller = new IndexController();
      $controller->borrarComentario();
      break;
    case ConfigApp::$ACTION_MODIFICAR_NAMEUSER:
      $controller = new IndexController();
      $controller->modificarNameUser();
      break;
    case ConfigApp::$ACTION_AGREGAR_IMG_USER:
      $controller = new IndexController();
      $controller->agregarImgUser();
      break; 
    case ConfigApp::$ACTION_MODIFICAR_PASSUSER:
      $controller = new IndexController();
      $controller->modificarPassUser();
      break; 
    case ConfigApp::$ACTION_BORRAR_LIKE:
      $controller = new IndexController();
      $controller->borrarLike();
      break;  
    case ConfigApp::$ACTION_AGREGAR_USUARIO:
      $controller = new IndexController();
      $controller->agregarUsuario();
      break;
      
//comentarios    
   
    case ConfigApp::$ACTION_MODIFICAR_COMENTARIO:
      $controller = new IndexController();
      $controller->modificarComentario();
      break; 
    default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>
