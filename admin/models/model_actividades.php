<?php

require_once('model.php');

class model_actividades extends model{

public function getActividades(){
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


public function getActividad($id){
    $select = $this->db->prepare('SELECT * FROM actividad WHERE id=?');
    $select->execute(array($id));
    $actividad=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividad;
  }

public function getProfeact($id){
    $select = $this->db->prepare("SELECT p.nombre, p.foto, p.apellido, p.horarios, a.nombre as nombreAct FROM profesor p, actividad a WHERE p.id_act=a.id AND p.id_act=?");
    $select->execute(array($id));
    $profeact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profeact;
  }
  
//ABM actividades
public function agregarActividad($new_nombre_a,$new_descripcion_a,$imagenes){
  try{
      $destinos_finales=$this->subirImagenes($imagenes);
      $this->db->beginTransaction();
      $consulta = $this->db->prepare('INSERT INTO actividad(nombre,descripcion) VALUES(?,?)');
      $consulta->execute(array($new_nombre_a,$new_descripcion_a));
      $id_act = $this->db->lastInsertId();

      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('INSERT INTO img_actividad(foto,id_act) VALUES(?,?)');
        $consulta->execute(array( $value,$id_act));
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

public function modificarActividad($upd_nombre,$upd_descripcion,$id_act){
    $consulta = $this->db->prepare('UPDATE actividad SET nombre=?,descripcion=? WHERE id=?');
    $consulta->execute(array($upd_nombre,$upd_descripcion,$id_act));
}}

?>
