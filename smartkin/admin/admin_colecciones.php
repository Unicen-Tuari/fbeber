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
  $controller->mostrarHomeColecciones();
}

else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {

/*colecciones*/
    case ConfigApp::$ACTION_AGREGAR_COLECCION:
      $controller = new IndexController();
      $controller->agregarColeccion();
      break;
    case ConfigApp::$ACTION_BORRAR_COLECCION:
      $controller = new IndexController();
      $controller->borrarColeccion();
      break;
    case ConfigApp::$ACTION_MODIFICAR_NAME_COL:
      $controller = new IndexController();
      $controller->modificarNameCol();
      break;     
    case ConfigApp::$ACTION_PUBLICAR_COLECCION:
      $controller = new IndexController();
      $controller->publicarColeccion();
      break;
    case ConfigApp::$ACTION_NO_PUBLICAR_COLECCION:
      $controller = new IndexController();
      $controller->noPublicarColeccion();
      break;
/*modelos*/      
    case ConfigApp::$ACTION_AGREGAR_MODELOS:
      $controller = new IndexController();
      $controller->agregarModelos();
      break;
    case ConfigApp::$ACTION_BORRAR_MODELO:
      $controller = new IndexController();
      $controller->borrarModelo();
      break;
          default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>
