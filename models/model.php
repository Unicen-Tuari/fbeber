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
  public function getActividad($id){
    $select = $this->db->prepare('SELECT * FROM actividad WHERE id='.$id.'');
    $select->execute();
    $actividad=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividad;
  }

  public function getProfeact($id){
    $select = $this->db->prepare("SELECT p.nombre, p.foto, p.apellido, p.horarios, a.nombre as nombreAct FROM profesor p, actividad a WHERE p.id_act=a.id AND p.id_act=?");
    $select->execute(array($id));
    $profeact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profeact;
  }
  public function getProfesores(){
    $select = $this->db->prepare("SELECT a.nombre as nombreAct, p.nombre, p.apellido, p.foto, p.descripcion from profesor p, actividad a where p.id_act=a.id");
    $select->execute();
    $profesores=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesores;
  }
}


?>
