<?php
  
include 'Controller/IndexController.php';
include_once 'config/config_app.php';

$model = new IndexModel();
$view = new IndexView();
//$controller = new IndexController($model, $view);

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $controller = new IndexController();
  $controller->mostrarHomeAdmin();
}

else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_HABILITAR_USUARIO:
      $controller = new IndexController();
      $controller->habilitarUsuario();
      break;
    case ConfigApp::$ACTION_NO_HABILITAR_USUARIO:
      $controller = new IndexController();
      $controller->NoHabilitarUsuario();
      break;
    case ConfigApp::$ACTION_AGREGAR_PORTFOLIO:
      $controller = new IndexController();
      $controller->agregarPortfolio();
      break;
    case ConfigApp::$ACTION_BORRAR_SLIDE:
      $controller = new IndexController();
      $controller->borrarSlide();
      break;
    case ConfigApp::$ACTION_BORRAR_PORTFOLIO:
      $controller = new IndexController();
      $controller->borrarPortfolio();
      break;    
    case ConfigApp::$ACTION_AGREGAR_IMG_PORTFOLIO:
      $controller = new IndexController();
      $controller->agregarImgPortfolio();
      break;
    case ConfigApp::$ACTION_BORRAR_IMG_PORTFOLIO:
      $controller = new Controller();
      $controller->borrarImgPortfolio();
      break;
    case ConfigApp::$ACTION_AGREGAR_COLECCION:
      $controller = new IndexController();
      $controller->agregarColeccion();
      break;
    case ConfigApp::$ACTION_BORRAR_COLECCION:
      $controller = new IndexController();
      $controller->borrarColeccion();
      break;    
    case ConfigApp::$ACTION_PUBLICAR_COLECCION:
      $controller = new IndexController();
      $controller->publicarColeccion();
      break;
    case ConfigApp::$ACTION_NO_PUBLICAR_COLECCION:
      $controller = new IndexController();
      $controller->noPublicarColeccion();
      break;
    case ConfigApp::$ACTION_AGREGAR_MODELOS:
      $controller = new IndexController();
      $controller->agregarModelos();
      break;
    case ConfigApp::$ACTION_BORRAR_MODELO:
      $controller = new IndexController();
      $controller->borrarModelo();
      break;
    case ConfigApp::$ACTION_BORRAR_COMENTARIO:
      $controller = new IndexController();
      $controller->borrarComentario();
      break;  
    
    default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>
