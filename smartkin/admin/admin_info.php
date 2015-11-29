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
  $controller->mostrarHomeInfo();
}

else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {

/*informacion*/
    case ConfigApp::$ACTION_AGREGAR_INFO:
      $controller = new IndexController();
      $controller->agregarInfo();
      break;
    case ConfigApp::$ACTION_BORRAR_INFO:
      $controller = new IndexController();
      $controller->borrarInfo();
      break;
    case ConfigApp::$ACTION_MODIFICAR_INFO:
      $controller = new IndexController();
      $controller->modificarInfo();
      break;
          default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>