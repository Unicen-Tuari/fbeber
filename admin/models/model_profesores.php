<?php

require_once('model.php');

class model_profesores extends model{

  public function subirImagenes($imagenes){
    $carpeta = "../images/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
      move_uploaded_file($value, end($destinos_finales));
    }
    return $destinos_finales;
  }

public function getActividades(){
    $select = $this->db->prepare('SELECT * FROM actividad');
    $select->execute();
    $actividades=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividades;
}  

public function getProfesores(){
    $select = $this->db->prepare("SELECT a.id as idAct,p.foto,p.id,p.email,p.apyno,p.is_admin,p.pass,p.dni,p.descripcion,p.horarios,a.nombre as nombreAct FROM profesor p, actividad a WHERE p.id_act=a.id");
    $select->execute();
    $profesores=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesores;
  }

//consulta por un profesor en especial (caso de borrado)
public function getProfesor($id){
    $select = $this->db->prepare('SELECT * FROM profesor WHERE id=?');
    $select->execute(array($id));
    $profesor=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesor;
  }

//consulta por un profesor en especial (caso de borrado)
public function getUsuariosprofesor($id){
    $select = $this->db->prepare("SELECT * FROM usuario u, inscripcion i WHERE u.id=i.id_usuario AND i.id_profe=?");
    $select->execute(array($id));
    $inscriptos=$select->fetchAll(PDO::FETCH_ASSOC);
    return $inscriptos;
  }
  

//ABM profesores
public function agregarProfesor($new_apyno_p,$new_email_p,$new_pass_p,$new_dni_p,$new_descripcion_p,$new_horarios_p,$new_id_act_p){
    /*try{
      $destinos_finales=$this->subirImagenes($imagenes);
      $this->db->beginTransaction();
      foreach ($destinos_finales as $key => $value) {*/
        $consulta = $this->db->prepare('INSERT INTO profesor(apyno,email,pass,dni,descripcion,horarios,id_act) VALUES(?,?,?,?,?,?,?)');
        $consulta->execute(array($new_apyno_p,$new_email_p,$new_pass_p,$new_dni_p,$new_descripcion_p,$new_horarios_p,$new_id_act_p));
      /*}
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }*/
  }

public function borrarProfesor($id_profe){
    $consulta = $this->db->prepare('DELETE FROM profesor WHERE id=?');
    $consulta->execute(array($id_profe));
  }
  

public function modificarProfesor($upd_apyno_p,$upd_email_p,$upd_pass_p,$upd_dni_p,$upd_descripcion_p,$upd_horarios_p,$upd_id_act_p,$upd_permisos_p, $id_profe){
    /*try{
      $destinos_finales=$this->subirImagenes($upd_foto_p);
      $this->db->beginTransaction();
      foreach ($destinos_finales as $key => $value) {*/
      $consulta = $this->db->prepare('UPDATE profesor SET apyno=?, email=?, pass=?, dni=?, descripcion=?, horarios=?, id_act=?,is_admin=? WHERE id=?');
      $consulta->execute(array($upd_apyno_p,$upd_email_p,$upd_pass_p,$upd_dni_p,$upd_descripcion_p,$upd_horarios_p,$upd_id_act_p,$upd_permisos_p, $id_profe));
  /*}
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }*/
}
}
?>