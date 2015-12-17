<?php
  
include 'Controller/IndexController.php';
include_once 'config/config_app.php';

$model = new IndexModel();
$view = new IndexView();
//$controller = new IndexController($model, $view);

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $controller = new IndexController();
  $controller->mostrarHomeComentarios();
}

else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {
/*comentarios*/      
    case ConfigApp::$ACTION_BORRAR_COMENTARIO:
      $controller = new IndexController();
      $controller->borrarComentario();
      break;  
    
    default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>
