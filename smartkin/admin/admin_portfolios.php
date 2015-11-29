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
  $controller->mostrarHomePortfolios();
}

else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {

/*portfolios*/
    case ConfigApp::$ACTION_AGREGAR_PORTFOLIO:
      $controller = new IndexController();
      $controller->agregarPortfolio();
      break;
    case ConfigApp::$ACTION_BORRAR_PORTFOLIO:
      $controller = new IndexController();
      $controller->borrarPortfolio();
      break;
    case ConfigApp::$ACTION_MODIFICAR_NAME_PORT:
      $controller = new IndexController();
      $controller->modificarNamePort();
      break;
/*img-portfolios*/    
    case ConfigApp::$ACTION_AGREGAR_IMG_PORT:
      $controller = new IndexController();
      $controller->agregarImgPort();
      break;
    case ConfigApp::$ACTION_BORRAR_IMG_PORTFOLIO:
      $controller = new IndexController();
      $controller->borrarImgPortfolio();
      break;
    default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>
