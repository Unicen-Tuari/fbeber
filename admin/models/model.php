<?php

class model
{
  private $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=gimnasio;charset=utf8','root','');
  }

  public function getActividades(){
    $select = $this->db->prepare("select a.nombre, a.id, a.descripcion, a.diasHorarios, p.nombre as profesor from actividad a, profesor p WHERE a.id_profesor = p.id");
    $select->execute();
    $actividades=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividades;
  }

  public function getProfesores(){
    $select = $this->db->prepare("select nombre from profesor");
    $select->execute();
    $profesores=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesores;
  }

}


?>
