<?php
require('config/configApp.php');
require('controllers/controller.php');
require('controllers/controller_usuario.php');

$controller = new controller();
$controller_usuario = new controller_usuario();

switch (isset($_GET[configApp::$ACTION]) ? $_GET[configApp::$ACTION] : configApp::$ACTION_INCLUDE){

  case configApp::$ACTION_INCLUDE:
      $controller->includes();
  break;

  case configApp::$ACTION_INICIO:
      $controller->inicio();
  break;

  case configApp::$ACTION_USUARIO://new -> ok
      $controller_usuario->usuario();
  break;

  case configApp::$ACTION_AGREGAR_USUARIO://new -> ok
      $controller_usuario->agregarUsuario();
  break;

  //ABM comentario
  case configApp::$ACTION_AGREGAR_COMENTARIO://new -> solo agrega a la primer actividad :/
      $controller_usuario->agregarComentario();
  break;
  /*case configApp::$ACTION_BORRAR_COMENTARIO://en prueba
      $controller_usuario->borrarComentario();
  break;*/
  //
  case configApp::$ACTION_COMENTARIOS://new -> ok
    $controller_usuario->comentarios();
  break; 
 
  case configApp::$ACTION_ACTIVIDADES:
      $controller->actividades();
  break;

  case configApp::$ACTION_ACTIVIDAD:
      $controller->actividad();
  break;
    
  case configApp::$ACTION_PROFE_ACT:
    $controller->profeact();
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
