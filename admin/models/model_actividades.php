<?php

require_once('model.php');

class model_actividades extends model{

public function getActividades(){//OK
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

public function getActividad($id){//OK
    $actividad = array();
    $select = $this->db->prepare('SELECT * FROM actividad WHERE id=?');
    $select->execute(array($id));
    $actividad=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividad;
  }

public function getProfeact($id){//OK
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

//obtiene todas las imagenes por actividad
public function getImagesAct($id){
    $select = $this->db->prepare("SELECT i.foto, i.id,i.id_act FROM img_actividad i, actividad a WHERE i.id_act=a.id AND i.id_act=?");
    $select->execute(array($id));
    $imagesact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $imagesact;
  }

//ABM actividades
    /*private function subirImagenes($imagenes){
    $carpeta = "./images/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
      move_uploaded_file($value, end($destinos_finales));
    }
    return $destinos_finales;
  } */

  function copiarImagen($image){
    $path = './images/'.uniqid().$image["name"];
    move_uploaded_file($image["tmp_name"], $path);
    return $path;
  }

  function agregarActividad($act,$description,$images){
    $insert = $this->db->prepare("INSERT INTO actividad(nombre,descripcion) VALUES(?,?)");
    $insert->execute(array($act,$description));
    $fk_tarea = $this->db->lastInsertId();

    foreach ($images as $image) {
      $path_image =  $this->copiarImagen($image);
      $insert = $this->db->prepare("INSERT INTO img_actividad(foto,id_act) VALUES(?,?)");
      $insert->execute(array($path_image,$fk_tarea));
  }
  }

public function borraImagen($id_img){
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
