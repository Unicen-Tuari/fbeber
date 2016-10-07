<?php
require('config/configApp.php');
require('controllers/controller.php');

$controller = new controller();

switch (isset($_GET[configApp::$ACTION]) ? $_GET[configApp::$ACTION] : configApp::$ACTION_INICIO){

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

  //ABM ACTIVIDADES
  case configApp::$ACTION_AGREGAR_ACTIVIDAD:
      $controller->agregaractividad();
  break;


  default:
    echo "PÁGINA NO ENCONTRADA";
  break;
}
 ?>
