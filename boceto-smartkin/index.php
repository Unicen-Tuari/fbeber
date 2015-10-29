<?php
include_once 'config/config_app.php';
include_once 'controller.php';

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $Controller = new Controller();
  $Controller->mostrarHome();
}
else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_HABILITAR_USUARIO:
      $Controller = new Controller();
      $Controller->habilitarUsuario();
      break;
    case ConfigApp::$ACTION_NO_HABILITAR_USUARIO:
      $Controller = new Controller();
      $Controller->NoHabilitarUsuario();
      break;
    case ConfigApp::$ACTION_AGREGAR_PORTFOLIO:
      $Controller = new Controller();
      $Controller->agregarPortfolio();
      break;
    case ConfigApp::$ACTION_BORRAR_PORTFOLIO:
      $Controller = new Controller();
      $Controller->borrarPortfolio();
      break;    
    case ConfigApp::$ACTION_AGREGAR_IMG_PORTFOLIO:
      $Controller = new Controller();
      $Controller->agregarImgPortfolio();
      break;
    case ConfigApp::$ACTION_BORRAR_IMG_PORTFOLIO:
      $Controller = new Controller();
      $Controller->borrarImgPortfolio();
      break;
    case ConfigApp::$ACTION_AGREGAR_COLECCION:
      $Controller = new Controller();
      $Controller->agregarColeccion();
      break;
    case ConfigApp::$ACTION_BORRAR_COLECCION:
      $Controller = new Controller();
      $Controller->borrarColeccion();
      break;    
    case ConfigApp::$ACTION_PUBLICAR_COLECCION:
      $Controller = new Controller();
      $Controller->publicarColeccion();
      break;
    case ConfigApp::$ACTION_NO_PUBLICAR_COLECCION:
      $Controller = new Controller();
      $Controller->noPublicarColeccion();
      break;
    case ConfigApp::$ACTION_AGREGAR_MODELOS:
      $Controller = new Controller();
      $Controller->agregarModelos();
      break;
    case ConfigApp::$ACTION_BORRAR_MODELO:
      $Controller = new Controller();
      $Controller->borrarModelo();
      break;
    case ConfigApp::$ACTION_BORRAR_COMENTARIO:
      $Controller = new Controller();
      $Controller->borrarComentario();
      break;  
    
    default:
      echo 'Pagina no encontrada';
      break;
  }


}



?>
