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
    $this->view->mostrarIncludes();
  }

  public function inicio(){
    $this->view->mostrarInicio();
  }


}
?>
