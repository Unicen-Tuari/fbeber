<?php
include_once 'config/config_app.php';
include_once 'controller.php';

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $controller = new Controller();
  $controller->mostrarHome();
}
else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_HABILITAR_USUARIO:
      $controller = new Controller();
      $controller->habilitarUsuario();
      break;
    case ConfigApp::$ACTION_NO_HABILITAR_USUARIO:
      $controller = new Controller();
      $controller->NoHabilitarUsuario();
      break;
    case ConfigApp::$ACTION_AGREGAR_PORTFOLIO:
      $controller = new Controller();
      $controller->agregarPortfolio();
      break;
    case ConfigApp::$ACTION_BORRAR_SLIDE:
      $controller = new Controller();
      $controller->borrarSlide();
      break;
    case ConfigApp::$ACTION_BORRAR_PORTFOLIO:
      $controller = new Controller();
      $controller->borrarPortfolio();
      break;    
    case ConfigApp::$ACTION_AGREGAR_IMG_PORTFOLIO:
      $controller = new Controller();
      $controller->agregarImgPortfolio();
      break;
    case ConfigApp::$ACTION_BORRAR_IMG_PORTFOLIO:
      $controller = new Controller();
      $controller->borrarImgPortfolio();
      break;
    case ConfigApp::$ACTION_AGREGAR_COLECCION:
      $controller = new Controller();
      $controller->agregarColeccion();
      break;
    case ConfigApp::$ACTION_BORRAR_COLECCION:
      $controller = new Controller();
      $controller->borrarColeccion();
      break;    
    case ConfigApp::$ACTION_PUBLICAR_COLECCION:
      $controller = new Controller();
      $controller->publicarColeccion();
      break;
    case ConfigApp::$ACTION_NO_PUBLICAR_COLECCION:
      $controller = new Controller();
      $controller->noPublicarColeccion();
      break;
    case ConfigApp::$ACTION_AGREGAR_MODELOS:
      $controller = new Controller();
      $controller->agregarModelos();
      break;
    case ConfigApp::$ACTION_BORRAR_MODELO:
      $controller = new Controller();
      $controller->borrarModelo();
      break;
    case ConfigApp::$ACTION_BORRAR_COMENTARIO:
      $controller = new Controller();
      $controller->borrarComentario();
      break;  
    
    default:
      echo 'Pagina no encontrada';
      break;
  }

}



?>
