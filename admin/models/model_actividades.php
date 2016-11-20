<?php

require_once('model.php');

class model_actividades extends model{

public function getActividades(){
    $actividades = array();
    $consulta = $this->db->prepare("SELECT * from actividad");
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
    $actividad = array();
    $select = $this->db->prepare('SELECT * FROM actividad WHERE id=?');
    $select->execute(array($id));
    $actividad=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividad;
  }

public function getProfeact($id){
    $select = $this->db->prepare("SELECT p.apyno, p.foto, p.horarios, a.nombre as nombreAct FROM profesor p, actividad a WHERE p.id_act=a.id AND p.id_act=?");
    $select->execute(array($id));
    $profeact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profeact;
  }

public function getComact($id){
    $select = $this->db->prepare("SELECT c.comentario, c.puntaje, c.id_usuario, a.nombre,u.apyno FROM comentario c, actividad a, usuario u WHERE c.id_act=a.id AND c.id_act=? AND c.id_usuario=u.id");
    $select->execute(array($id));
    $comact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $comact;
  }

public function getImagesAct($id){
    $select = $this->db->prepare("SELECT i.foto, i.id FROM img_actividad i, actividad a WHERE i.id_act=a.id AND i.id_act=?");
    $select->execute(array($id));
    $imagesact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $imagesact;
  }

//select a.nombre, COUNT(*) as cantidad from actividad a, usuario u, profesor p where p.id=u.id_profe AND a.id=p.id_act group by a.nombre

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
public function borrarImg($id_img){
    $consulta = $this->db->prepare('DELETE FROM img_actividad WHERE id=?');
    $consulta->execute(array($id_img));
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
