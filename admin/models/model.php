<?php

class model
{
  public $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=gimnasio;charset=utf8','root','');
  }


//IMAGENES
  public function subirImagenes($imagenes){
    $carpeta = "../images/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
      move_uploaded_file($value, end($destinos_finales));
    }
    return $destinos_finales;
  }
}




?>
