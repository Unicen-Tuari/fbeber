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
  $controller->mostrarHomeSlides();
}

else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {

/*SLIDES*/
    case ConfigApp::$ACTION_AGREGAR_SLIDES:
      $controller = new IndexController();
      $controller->agregarSlides();
      break;
    case ConfigApp::$ACTION_BORRAR_SLIDES:
      $controller = new IndexController();
      $controller->borrarSlides();
      break;
    case ConfigApp::$ACTION_MODIFICAR_NAME_SLIDE:
      $controller = new IndexController();
      $controller->modificarNameSlide();
      break;     
    case ConfigApp::$ACTION_PUBLICAR_SLIDES:
      $controller = new IndexController();
      $controller->publicarSlides();
      break;
    case ConfigApp::$ACTION_NO_PUBLICAR_SLIDES:
      $controller = new IndexController();
      $controller->noPublicarSlides();
      break;
/*IMG SLIDE*/      
    case ConfigApp::$ACTION_AGREGAR_SLIDE:
      $controller = new IndexController();
      $controller->agregarSlide();
      break;
    case ConfigApp::$ACTION_BORRAR_SLIDE:
      $controller = new IndexController();
      $controller->borrarImgSlide();
      break;
          default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>
