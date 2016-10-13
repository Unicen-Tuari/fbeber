<?php
require('config/configApp.php');
require('controllers/controller.php');

$controller = new controller();

switch (isset($_GET[configApp::$ACTION]) ? $_GET[configApp::$ACTION] : configApp::$ACTION_INCLUDE){

  case configApp::$ACTION_INCLUDE:
      $controller->includes();
  break;

  case configApp::$ACTION_INICIO:
      $controller->inicio();
  break; 

  case configApp::$ACTION_ACTIVIDADES:
      $controller->actividades();
  break;

  case configApp::$ACTION_NOSOTROS:
      $controller->nosotros();
  break;

  case configApp::$ACTION_CONTACTO:
      $controller->contacto();
  break;
  
  default:
    echo "PÁGINA NO ENCONTRADA";
  break;
}
 ?>
