<?php

class model
{
  public $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=gimnasio;charset=utf8','root','');
  }

  public function getActividades(){ //todas las actividades
    $actividades = array();
    $consulta = $this->db->prepare("SELECT * FROM actividad");
    $consulta->execute();
    while($actividad = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaImagenes = $this->db->prepare("SELECT * FROM img_actividad where id_act=?");
      $consultaImagenes->execute(array($actividad['id']));
      $imagenes_actividad = $consultaImagenes->fetchAll();
      $actividad['imagenes'] = $imagenes_actividad;
      $actividades[]=$actividad;
    }
    return $actividades;
  }
  
  public function getActividad($id){ //actividad
    $select = $this->db->prepare("SELECT * FROM actividad WHERE id=?");
    $select->execute(array($id));
    $actividad=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividad;
  }

  public function getProfeact($id){ //profesores por actividad (seccion act)
    $select = $this->db->prepare("SELECT p.apyno, p.foto, p.horarios, a.nombre as nombreAct FROM profesor p, actividad a WHERE p.id_act=a.id AND p.id_act=?");
    $select->execute(array($id));
    $profeact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profeact;
  }

  public function getProfesores(){ //profesores (seccion nosotros)
    $select = $this->db->prepare("SELECT p.id, a.nombre as nombreAct, p.apyno, p.foto, p.descripcion from profesor p, actividad a where p.id_act=a.id");
    $select->execute();
    $profesores=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesores;
  }
}
?>
