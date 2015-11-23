<?php
  
include 'Controller/IndexController.php';
include_once 'config/config_app.php';

$model = new IndexModel();
$view = new IndexView();
$controller = new IndexController($model, $view);

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $controller = new IndexController();
  $controller->mostrarUsuariosAdmin();
}
else {
  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_HABILITAR_USUARIO:
      $controller = new IndexController();
      $controller->habilitarUsuario();
      break;
    case ConfigApp::$ACTION_NO_HABILITAR_USUARIO:
      $controller = new IndexController();
      $controller->NoHabilitarUsuario();
      break;

    default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>
