<?php
require('config/configApp.php');
require('controllers/controller.php');
require('controllers/controller_actividades.php');
require('controllers/controller_profesores.php');

$controller = new controller();
$controller_actividades = new controller_actividades();
$controller_profesores = new controller_profesores();


switch (isset($_GET[configApp::$ACTION]) ? $_GET[configApp::$ACTION] : configApp::$ACTION_INCLUDE){

  case configApp::$ACTION_INCLUDE://ok
      $controller->includes();
  break; 
//SECCIONES
  case configApp::$ACTION_INICIO://ok
      $controller->inicio();
  break; 
  case configApp::$ACTION_ACTIVIDADES://ok
      $controller_actividades->actividades();
  break;
  case configApp::$ACTION_PROFESORES://ok
      $controller_profesores->profesores();
  break;

//CONSULTAS ESPECÍFICAS
//consulta una actividad en especial
  case configApp::$ACTION_ACTIVIDAD://ok
    $controller_actividades->actividad();
  break;
//consulta por un profesor en específico para ser eliminado
  case configApp::$ACTION_PROFESOR://ok
    $controller_profesores->profesor();
  break; 
//consulta los profesores por una actividad específica
  case configApp::$ACTION_PROFE_ACTIVIDADES://ok
    $controller_profesores->profeactividades();
  break;
  case configApp::$ACTION_PROFE_ACT://ok
    $controller_actividades->profeact();
  break;
  case configApp::$ACTION_IMAGES_ACT://ok
    $controller_actividades->imagesact();
  break;
//ALTAS, BAJAS Y MODIFICACIONES 
  //ABM ACTIVIDADES
  case ConfigApp::$ACTION_AGREGAR_ACTIVIDAD://ok ->faltan imagenes
      $controller_actividades->agregarActividad();
      break;
  case ConfigApp::$ACTION_BORRAR_ACTIVIDAD://ok
      $controller_actividades->borrarActividad();
      break;
  case ConfigApp::$ACTION_MODIFICAR_ACTIVIDAD://ok ->faltan imagenes
      $controller_actividades->modificarActividad();
      break; 
  //ABM PROFESORES
  case ConfigApp::$ACTION_AGREGAR_PROFESOR://falta
      $controller_profesores->agregarProfesor();
      break;
  case ConfigApp::$ACTION_BORRAR_PROFESOR://ok
      $controller_profesores->borrarProfesor();
      break;
  case ConfigApp::$ACTION_MODIFICAR_PROFESOR://falta
      $controller_profesores->modificarProfesor();
      break; 

//DEFAULT    
  default://ok
    echo "PÁGINA NO ENCONTRADA";
  break;

}
 ?>
