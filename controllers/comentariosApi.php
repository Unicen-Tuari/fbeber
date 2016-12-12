<?php
require_once('./models/model.php');
require_once('ApiBase.php');
require_once('config/configApp.php');

class ComentariosApi extends Api{

  private $model;

  public function __construct($request){

    parent::__construct($request);
    $this->model = new Model();
  }

  public function opiniones($argumentos){
    switch ($this->method) {
      case 'GET':
        if(count($argumentos) == 0)
            return $this->model->getComentarios();
        
        default:
        return "Metodo no implementado";
        break;
      }}
}

?>
