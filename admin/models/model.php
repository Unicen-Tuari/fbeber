<?php

class model
{
  public $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=gimnasio;charset=utf8','root','');
  }
  
  public function getUser($email){
    $usuario = array();
    $select = $this->db->prepare('SELECT * FROM profesor WHERE email=?');
    $select->execute(array($email));
    $usuario=$select->fetchAll(PDO::FETCH_ASSOC);
    return $usuario;

}
}




?>
