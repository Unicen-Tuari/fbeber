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

  case configApp::$ACTION_PROFESORES:
      $controller->profesores();
  break;

  //ABM ACTIVIDADES
  case ConfigApp::$ACTION_AGREGAR_ACTIVIDAD:
      $controller->agregarActividad();
      break;
  case ConfigApp::$ACTION_BORRAR_ACTIVIDAD:
      $controller->borrarActividad();
      break;
  case ConfigApp::$ACTION_MODIFICAR_ACTIVIDAD:
      $controller->modificarActividad();
      break; 

  //ABM PROFESORES
  case ConfigApp::$ACTION_AGREGAR_PROFESOR:
      $controller->agregarProfesor();
      break;
  case ConfigApp::$ACTION_BORRAR_PROFESOR:
      $controller->borrarProfesor();
      break;
  case ConfigApp::$ACTION_MODIFICAR_PROFESOR:
      $controller->modificarProfesor();
      break; 

  //DEFAULT    
  default:
    echo "PÁGINA NO ENCONTRADA";
  break;

}
 ?>
