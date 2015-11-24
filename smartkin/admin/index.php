<?php
  
include 'Controller/IndexController.php';
include_once 'config/config_app.php';

$model = new IndexModel();
$view = new IndexView();
//$controller = new IndexController($model, $view);

if(isset($_POST["email_admin"]) && isset($_POST['pass_admin']))
{
  $formulario["email_admin"] = $_POST["email_admin"];
  $formulario["pass_admin"] = $_POST["pass_admin"];
  $controller->loginAdmin($formulario);
}
else if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $controller = new IndexController();
  $controller->mostrarHomeAdmin();
}

else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {
/*usuarios*/
    case ConfigApp::$ACTION_HABILITAR_USUARIO:
      $controller = new IndexController();
      $controller->habilitarUsuario();
      break;
    case ConfigApp::$ACTION_NO_HABILITAR_USUARIO:
      $controller = new IndexController();
      $controller->NoHabilitarUsuario();
      break;
/*informacion*/
    case ConfigApp::$ACTION_AGREGAR_INFO:
      $controller = new IndexController();
      $controller->agregarInfo();
      break;
    case ConfigApp::$ACTION_BORRAR_INFO:
      $controller = new IndexController();
      $controller->borrarInfo();
      break;
    case ConfigApp::$ACTION_MODIFICAR_INFO:
      $controller = new IndexController();
      $controller->modificarInfo();
      break;
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
/*comentarios*/      
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
