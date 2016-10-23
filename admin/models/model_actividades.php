<?php

require_once('model.php');

class model_actividades extends model{

public function getActividades(){
    $select = $this->db->prepare('SELECT * FROM actividad');
    $select->execute();
    $actividades=$select->fetchAll(PDO::FETCH_ASSOC);
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
    $destinos_finales=$this->subirImagenes($upd_foto);
    $this->db->beginTransaction();
    foreach ($destinos_finales as $key => $value) {
    $consulta = $this->db->prepare('UPDATE actividad SET nombre=?,descripcion=?, foto=? WHERE id=?');
    $consulta->execute(array($upd_nombre,$upd_descripcion,$value,$id_act));
    }
    $this->db->commit();
}
}

?>
