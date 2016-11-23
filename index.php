<?php
require('config/configApp.php');
require('controllers/controller.php');
require('controllers/controller_usuario.php');
require('controllers/controller_login.php');


$controller = new controller();
$controller_usuario = new controller_usuario();

switch (isset($_GET[configApp::$ACTION]) ? $_GET[configApp::$ACTION] : configApp::$ACTION_INCLUDE){

//NAVEGACION
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
  case configApp::$ACTION_OPINIONES:
      $controller->opiniones();
  break;
  case configApp::$ACTION_CUENTA:
      $controller_usuario->cuenta();
  break;

//ABM comentario
  case configApp::$ACTION_AGREGAR_COMENTARIO://new -> solo agrega a la primer actividad :/
      $controller_usuario->agregarComentario();
  break;
 //muestra el usuario del comentario
  case configApp::$ACTION_USUARIO://new -> ok
      $controller_usuario->usuario();
  break;
  case configApp::$ACTION_COMENTARIOS://new -> ok
    $controller->comentarios();
  break; 
 
//AM USUARIO
  case configApp::$ACTION_INSCRIBIR://inscribir un usuario a una actividad
    $controller->inscribir();
  break;
  case configApp::$ACTION_AGREGAR_USUARIO://new -> ok
      $controller_usuario->agregarUsuario();
  break;
  
//CONSULTAS ESPECIFICAS
  //muestra info de una actividad en especial
  case configApp::$ACTION_ACTIVIDAD:
      $controller->actividad();
  break;
  //muestra los profesores de una actividad en especifica
  case configApp::$ACTION_PROFE_ACT:
    $controller->profeact();
  break;
  
  default:
    echo "PÁGINA NO ENCONTRADA";
  break;
}
 ?>
