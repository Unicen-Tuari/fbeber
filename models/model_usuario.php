<?php

require_once('model.php');

class model_usuario extends model{

//agrega nuevo usuario -> registrarse
public function agregarUsuario($new_apyno_u,$new_email_u,$new_pass_u){
  $consulta = $this->db->prepare('INSERT INTO usuario(apyno,email,pass,id_profe) VALUES(?,?,?,1)');
  $consulta->execute(array($new_apyno_u,$new_email_u,$new_pass_u));
  }

//comentarios
public function getComact($id){ //profesores por actividad (seccion act)
    $select = $this->db->prepare("SELECT c.comentario, c.puntaje, c.id_usuario, a.nombre,u.apyno FROM comentario c, actividad a, usuario u WHERE c.id_act=a.id AND c.id_act=? AND c.id_usuario=u.id");
    $select->execute(array($id));
    $comact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $comact;
  }

//agregar comentario
public function agregarComentario($new_comentario,$new_puntaje,$new_idAct_c,$new_idUser_c){
  $consulta = $this->db->prepare('INSERT INTO comentario(comentario,puntaje,id_act,id_usuario) VALUES(?,?,?,?)');
  $consulta->execute(array($new_comentario,$new_puntaje,$new_idAct_c,$new_idUser_c));
  }
}

?>
