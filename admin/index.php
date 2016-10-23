<?php
require('config/configApp.php');
require('controllers/controller.php');
require('controllers/controller_actividades.php');
require('controllers/controller_profesores.php');

$controller = new controller();
$controller_actividades = new controller_actividades();
$controller_profesores = new controller_profesores();


switch (isset($_GET[configApp::$ACTION]) ? $_GET[configApp::$ACTION] : configApp::$ACTION_INICIO){

  case configApp::$ACTION_INICIO:
      $controller->inicio();
  break; 

  case configApp::$ACTION_ACTIVIDADES:
      $controller_actividades->actividades();
  break;

  case configApp::$ACTION_PROFESORES:
      $controller_profesores->profesores();
  break;

//consulta una actividad en especial
  case configApp::$ACTION_ACTIVIDAD:
    $controller_actividades->actividad();
  break;

  case configApp::$ACTION_PROFESOR:
    $controller_profesores->profesor();
  break;
  
//consulta los profesores por una actividad específica
  case configApp::$ACTION_PROFE_ACT:
    $controller_actividades->profeact();
  break;

  
  //ABM ACTIVIDADES
  case ConfigApp::$ACTION_AGREGAR_ACTIVIDAD:
      $controller_actividades->agregarActividad();
      break;
  case ConfigApp::$ACTION_BORRAR_ACTIVIDAD:
      $controller_actividades->borrarActividad();
      break;
  case ConfigApp::$ACTION_MODIFICAR_ACTIVIDAD:
      $controller_actividades->modificarActividad();
      break; 

  //ABM PROFESORES
  case ConfigApp::$ACTION_AGREGAR_PROFESOR:
      $controller_profesores->agregarProfesor();
      break;
  case ConfigApp::$ACTION_BORRAR_PROFESOR:
      $controller_profesores->borrarProfesor();
      break;
  case ConfigApp::$ACTION_MODIFICAR_PROFESOR:
      $controller_profesores->modificarProfesor();
      break; 

  //DEFAULT    
  default:
    echo "PÁGINA NO ENCONTRADA";
  break;

}
 ?>
