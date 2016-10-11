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

  public function getProfesores(){
    $select = $this->db->prepare("select a.id as idAct,p.foto,p.id,p.nombre,p.apellido,p.dni,p.descripcion,a.nombre as nombreAct from profesor p, actividad a where p.id_act=a.id");
    $select->execute();
    $profesores=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesores;
  }

//ABM actividades
  public function agregarActividad($new_nombre_act,$new_descripcion_act,$new_foto_act){
    $consulta = $this->db->prepare('INSERT INTO actividad(nombre, descripcion, foto) VALUES(?,?,?)');
    $consulta->execute(array($new_nombre_act,$new_descripcion_act,$new_foto_act));
  }
  public function borrarActividad($id_act){
    $consulta = $this->db->prepare('DELETE FROM actividad WHERE id=?');
    $consulta->execute(array($id_act));
  }
  public function modificarActividad($upd_nombre,$upd_descripcion,$upd_foto,$id_act){
      $consulta = $this->db->prepare('UPDATE actividad SET nombre=?,descripcion=?,foto=? WHERE id=?');
      $consulta->execute(array($upd_nombre,$upd_descripcion,$upd_foto,$id_act));
  }

//ABM profesores
  public function agregarProfesor($new_nombre_p,$new_apellido_p,$new_dni_p,$new_foto_p,$new_descripcion_p,$new_id_act){
    $consulta = $this->db->prepare('INSERT INTO profesor(nombre, apellido, dni, foto, descripcion,id_act) VALUES(?,?,?,?,?,?)');
    $consulta->execute(array($new_nombre_p,$new_apellido_p,$new_dni_p,$new_foto_p,$new_descripcion_p,$new_id_act));
  }
  public function borrarProfesor($id_profe){
    $consulta = $this->db->prepare('DELETE FROM profesor WHERE id=?');
    $consulta->execute(array($id_profe));
  }
  public function modificarProfesor($upd_nombre_p,$upd_apellido_p,$upd_dni_p,$upd_foto_p,$upd_descripcion_p,$upd_id_act, $id_profe){
      $consulta = $this->db->prepare('UPDATE profesor SET nombre=?, apellido=?, dni=?, foto=?, descripcion=?, id_act=? WHERE id=?');
      $consulta->execute(array($upd_nombre_p,$upd_apellido_p,$upd_dni_p,$upd_foto_p,$upd_descripcion_p,$upd_id_act,$id_profe));
  }
}


?>
