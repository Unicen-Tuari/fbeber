<?php
 
require_once('model.php');

class model_usuario extends model{

//agrega nuevo usuario -> OK
public function agregarUsuario($new_apyno_u,$new_email_u,$new_pass_u){
  $consulta = $this->db->prepare('INSERT INTO usuario(apyno,email,pass) VALUES(?,?,?)');
  $consulta->execute(array($new_apyno_u,$new_email_u,$new_pass_u));
  }
//agregar comentario->OK
public function agregarComentario($new_comentario,$new_puntaje,$new_idAct_c,$new_idUser_c){
  $consulta = $this->db->prepare('INSERT INTO comentario(comentario,puntaje,id_act,id_usuario) VALUES(?,?,?,?)');
  $consulta->execute(array($new_comentario,$new_puntaje,$new_idAct_c,$new_idUser_c));
  }

//modificar usuario->OK
  public function modificarUsuario($upd_apyno_u,$upd_email_u,$upd_pass_u,$upd_id_u){
    $consulta = $this->db->prepare('UPDATE usuario SET apyno=?,email=?,pass=? WHERE id=?');
    $consulta->execute(array($upd_apyno_u,$upd_email_u,$upd_pass_u,$upd_id_u));
}

public function getMiscomentarios($id_usuario){//ok 
    $select = $this->db->prepare("SELECT c.id, c.comentario, c.puntaje, a.nombre FROM comentario c, actividad a, usuario u WHERE c.id_act=a.id AND u.id=c.id_usuario AND c.id_usuario=?");
    $select->execute(array($id_usuario));
    $miscomentarios=$select->fetchAll(PDO::FETCH_ASSOC);
    return $miscomentarios;
  }
public function getComentario($id){
    $select = $this->db->prepare('SELECT * FROM comentario WHERE id=?');
    $select->execute(array($id));
    $comentario=$select->fetchAll(PDO::FETCH_ASSOC);
    return $comentario;
  }

public function borrarComentario($id_comentario){
    $consulta = $this->db->prepare('DELETE FROM comentario WHERE id=?');
    $consulta->execute(array($id_comentario));
  }


public function getMisactividades($id_usuario){ 
    $select = $this->db->prepare("SELECT p.apyno,p.horarios,a.nombre,p.horarios FROM inscripcion i, profesor p, usuario u, actividad a WHERE i.id_profe=p.id AND i.id_usuario=u.id AND p.id_act=a.id AND i.id_usuario=?");
    $select->execute(array($id_usuario));
    $miscomentarios=$select->fetchAll(PDO::FETCH_ASSOC);
    return $miscomentarios;
  }
}

?>
