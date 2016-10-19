<?php

class model
{
  private $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=gimnasio;charset=utf8','root','');
  }

  public function getActividades(){
    $select = $this->db->prepare('SELECT * FROM actividad');
    $select->execute();
    $actividades=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividades;
  }
  public function getProfesor($id){
    $select = $this->db->prepare('SELECT * FROM profesor WHERE id='.$id.'');
    $select->execute();
    $profesor=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesor;
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
    $select = $this->db->prepare("SELECT a.id as idAct,p.foto,p.id,p.nombre,p.apellido,p.dni,p.descripcion,p.horarios,a.nombre as nombreAct FROM profesor p, actividad a WHERE p.id_act=a.id");
    $select->execute();
    $profesores=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesores;
  }

  

//IMAGENES
  private function subirImagenes($imagenes){
    $carpeta = "../images/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
      move_uploaded_file($value, end($destinos_finales));
    }
    return $destinos_finales;
  }

//ABM actividades
  public function agregarActividad($new_nombre_act,$new_descripcion_act,$imagenes){
    try{
      $destinos_finales=$this->subirImagenes($imagenes);
      $this->db->beginTransaction();
      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('INSERT INTO actividad(nombre, descripcion, foto) VALUES(?,?,?)');
        $consulta->execute(array($new_nombre_act,$new_descripcion_act, $value));
      }
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
  }
    
  public function borrarActividad($id_act){
    $consulta = $this->db->prepare('DELETE FROM actividad WHERE id=?');
    $consulta->execute(array($id_act));
  }

  public function modificarActividad($upd_nombre,$upd_descripcion,$upd_foto,$id_act){
      $consulta = $this->db->prepare('UPDATE actividad SET nombre=?,descripcion=?, foto=? WHERE id=?');
      $consulta->execute(array($upd_nombre,$upd_descripcion,$upd_foto,$id_act));
  }

//ABM profesores
  public function agregarProfesor($new_nombre_p,$new_apellido_p,$new_dni_p,$imagenes,$new_descripcion_p,$new_horarios,$new_id_act){
    try{
      $destinos_finales=$this->subirImagenes($imagenes);
      $this->db->beginTransaction();
      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('INSERT INTO profesor(nombre, apellido,dni,foto,descripcion,horarios,id_act) VALUES(?,?,?,?,?,?,?)');
        $consulta->execute(array($new_nombre_p,$new_apellido_p,$new_dni_p,$value,$new_descripcion_p,$new_horarios,$new_id_act));
      }
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
  }
  public function borrarProfesor($id_profe){
    $consulta = $this->db->prepare('DELETE FROM profesor WHERE id=?');
    $consulta->execute(array($id_profe));
  }
  
  public function modificarProfesor($upd_nombre_p,$upd_apellido_p,$upd_dni_p,$upd_foto_p,$upd_descripcion_p,$upd_horarios,$upd_id_act, $id_profe){
    try{
      $destinos_finales=$this->subirImagenes($upd_foto_p);
      $this->db->beginTransaction();
      foreach ($destinos_finales as $key => $value) {
      $consulta = $this->db->prepare('UPDATE profesor SET nombre=?, apellido=?, dni=?, foto=?, descripcion=?, horarios=?, id_act=? WHERE id=?');
      $consulta->execute(array($upd_nombre_p,$upd_apellido_p,$upd_dni_p,$value,$upd_descripcion_p,$upd_horarios,$upd_id_act,$id_profe));
  }
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
}}


?>
