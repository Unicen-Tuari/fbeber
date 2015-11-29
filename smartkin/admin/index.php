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
    default:
      echo 'Pagina no encontrada';
      break;
  }
}

?>
