<?php

require_once('model.php');

class model_profesores extends model{

public function getProfesor($id){
    $select = $this->db->prepare('SELECT * FROM profesor WHERE id=?');
    $select->execute();
    $profesor=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesor;
  }
  
public function getActividades(){
    $select = $this->db->prepare('SELECT * FROM actividad');
    $select->execute();
    $actividades=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividades;
}  

public function getProfesores(){
    $select = $this->db->prepare("SELECT a.id as idAct,p.foto,p.id,p.nombre,p.apellido,p.dni,p.descripcion,p.horarios,a.nombre as nombreAct FROM profesor p, actividad a WHERE p.id_act=a.id");
    $select->execute();
    $profesores=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesores;
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
}
}
?>