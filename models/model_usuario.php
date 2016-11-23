<?php

require_once('model.php');

class model_usuario extends model{

//agrega nuevo usuario -> registrarse
public function agregarUsuario($new_apyno_u,$new_email_u,$new_pass_u){
  $consulta = $this->db->prepare('INSERT INTO usuario(apyno,email,pass,id_profe) VALUES(?,?,?,1)');
  $consulta->execute(array($new_apyno_u,$new_email_u,$new_pass_u));
  }



//agregar comentario
public function agregarComentario($new_comentario,$new_puntaje,$new_idAct_c,$new_idUser_c){
  $consulta = $this->db->prepare('INSERT INTO comentario(comentario,puntaje,id_act,id_usuario) VALUES(?,?,?,?)');
  $consulta->execute(array($new_comentario,$new_puntaje,$new_idAct_c,$new_idUser_c));
  }


}

?>
