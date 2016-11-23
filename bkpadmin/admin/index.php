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

  case configApp::$ACTION_PROFESORES:
      $controller->profesores();
  break;

//consulta una actividad en especial
  case configApp::$ACTION_ACTIVIDAD:
    $controller->actividad();
  break;

  case configApp::$ACTION_PROFESOR:
    $controller->profesor();
  break;
  
//consulta los profesores por una actividad específica
  case configApp::$ACTION_PROFE_ACT:
    $controller->profeact();
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
