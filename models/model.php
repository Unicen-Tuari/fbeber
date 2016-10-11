<?php

class model
{
  private $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=gimnasio;charset=utf8','root','');
  }

  public function getActividades(){
    $select = $this->db->prepare("select * from actividad");
    $select->execute();
    $actividades=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividades;
  }

  public function getProfesoresXactividad($id_act){
    $select = $this->db->prepare("select p.nombre, p.apellido from actividad a, profesor p where a.id=p.id_act");
    $select->execute();
    $profesoresxactividad=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesoresxactividad;
  }

  public function getProfesores(){
    $select = $this->db->prepare("select a.nombre as nombreAct, p.nombre, p.apellido, p.foto, p.descripcion from profesor p, actividad a where p.id_act=a.id");
    $select->execute();
    $profesores=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesores;
  }
}


?>
