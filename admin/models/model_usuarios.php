<?php

require_once('model.php');

class model_usuarios extends model{

//trae todos los comentarios
public function getComentarios(){
    $select = $this->db->prepare('SELECT c.comentario, c.puntaje, a.nombre,u.apyno,c.id FROM comentario c, actividad a, usuario u WHERE c.id_act=a.id AND u.id=c.id_usuario');
    $select->execute();
    $comentarios=$select->fetchAll(PDO::FETCH_ASSOC);
    return $comentarios;
  }

public function getComentario($id){
    $comentario = array();
    $select = $this->db->prepare('SELECT * FROM comentario WHERE id=?');
    $select->execute(array($id));
    $comentario=$select->fetchAll(PDO::FETCH_ASSOC);
    return $comentario;
  }

public function borrarComentario($id_comentario){
    $consulta = $this->db->prepare('DELETE FROM comentario WHERE id=?');
    $consulta->execute(array($id_comentario));
  }



//trae todos los usuarios
public function getUsuarios(){
    $select = $this->db->prepare('SELECT * FROM usuario');
    $select->execute();
    $usuarios=$select->fetchAll(PDO::FETCH_ASSOC);
    return $usuarios;
  }

//consulta por un usuario especifico
public function getUsuario($id){
    $usuario = array();
    $select = $this->db->prepare('SELECT * FROM usuario WHERE id=?');
    $select->execute(array($id));
    $usuario=$select->fetchAll(PDO::FETCH_ASSOC);
    return $usuario;
  }

//consulta los comentarios de un usuario especifico
public function getComusuario($id){
    $select = $this->db->prepare("SELECT c.comentario, c.puntaje, a.nombre, u.apyno, u.id, a.nombre FROM comentario c, actividad a, usuario u WHERE  u.id=? AND u.id=c.id_usuario AND a.id=c.id_act");
    $select->execute(array($id));
    $comusuario=$select->fetchAll(PDO::FETCH_ASSOC);
    return $comusuario;
  }

//borra un usuario especifico
public function borrarUsuario($id_usuario){
    $consulta = $this->db->prepare('DELETE FROM usuario WHERE id=?');
    $consulta->execute(array($id_usuario));
  }

}

?>
