<?php
require('views/view.php');
require('models/model.php');

class controller
{
  private $view;
  private $model;

  public function __construct(){
    $this->view = new view();
    $this->model = new model();
  }

  public function includes(){
    session_start();
    if(isset($_SESSION["email"]))
    {
        $email=$_SESSION['email'];
        $admin = $this->model->getAdmin($email);
        $this->view->mostrarIncludes($admin);
    }
    else
    {
      
      $this->view->mostrarIncludes(null);
    }
  }

//consulta info del usuario logueado
  public function inicio(){
    $this->view->mostrarInicio();
  } 


}
?>
