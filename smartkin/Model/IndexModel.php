<?php
class IndexModel
{

//VARIABLES
  private $admin;
  private $comentariosUser;
  private $likes;
  private $formulario;
  private $comentarios;
  private $portfolios;
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=smartkin;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
public function getUsuario($mail){
    $sql = "Select * from usuario where email_user = '$mail'";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }
//IMAGENES
  private function subirImagenes($imagenes){
    $carpeta = "./images/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
      move_uploaded_file($value, end($destinos_finales));
    }
    return $destinos_finales;
  }
  
//LOGIN de USUARIO
  function getAdmin($email){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email_user = '$email'");
    $consulta->execute();
    $admin = $consulta->fetchAll(PDO::FETCH_ASSOC); 
    return $admin;
  }
//NUEVO USUARIO 
function agregarUsuario($new_email,$new_name,$new_pass){
    $consulta = $this->db->prepare('INSERT INTO usuario(email_user,name_user,pass_user) VALUES(?,?,?)');
    $consulta->execute(array($new_email,$new_name,$new_pass));
  }

//MODIFICAR USUARIO
function modificarNameUser($upd_name,$id_usuario){
      $consulta = $this->db->prepare('UPDATE usuario SET name_user=? WHERE id_user=?');
      $consulta->execute(array($upd_name,$id_usuario));
  }
function modificarPassUser($upd_pass,$id_usuario){
      $consulta = $this->db->prepare('UPDATE usuario SET pass_user=? WHERE id_user=?');
      $consulta->execute(array($upd_pass,$id_usuario));
  }
//agregar
    function agregarImgUser($imagenes,$id_user){
    try{
      $destinos_finales=$this->subirImagenes($imagenes);
      $this->db->beginTransaction();
      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('UPDATE usuario SET img_user=? WHERE id_user=?');
        $consulta->execute(array($value,$id_user));
      }
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
  }
  

//COMENTARIOS de USUARIO
  function getComentariosUser($email){
    $consulta = $this->db->prepare("SELECT * FROM comentario JOIN usuario WHERE comentario.fk_id_user=usuario.id_user AND usuario.email_user='$email'");
    $consulta->execute();
    $comentariosUser = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $comentariosUser;
  }
  function borrarComentario($id_comentario){
    $consulta = $this->db->prepare('DELETE FROM comentario WHERE id_com=?');
    $consulta->execute(array($id_comentario));
  }
  function agregarComentario($new_fk_user,$new_com){
    $consulta = $this->db->prepare('INSERT INTO comentario(fk_id_user,comentario) VALUES(?,?)');
    
    $consulta->execute(array($new_fk_user,$new_com));
  }
  function modificarComentario($upd_com,$id_com){
      $consulta = $this->db->prepare('UPDATE comentario SET comentario=? WHERE id_com=?');
      $consulta->execute(array($upd_com,$id_com));
  }
  
  
//LIKES de USUARIO
  function getLikes($email){
    $consulta = $this->db->prepare("SELECT * FROM modelo JOIN favorito JOIN usuario WHERE modelo.id_mod = favorito.fk_id_mod AND favorito.fk_id_user=usuario.id_user AND usuario.email_user='$email'");
    $consulta->execute();
    $likes = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $likes;
  }
  
  function agregarFavorito($new_fk_user,$new_fk_mod){
    $consulta = $this->db->prepare('INSERT INTO favorito(fk_id_user,fk_id_mod) VALUES(?,?)');
    
    $consulta->execute(array($new_fk_user,$new_fk_mod));
  }

  function borrarLike($id_like){
    $consulta = $this->db->prepare('DELETE FROM favorito WHERE id_fav=?');
    $consulta->execute(array($id_like));
  }

//HOME

//comentarios
  function getComentarios(){
    $consulta = $this->db->prepare("SELECT * FROM comentario JOIN usuario WHERE fk_id_user=id_user");
    $consulta->execute();
    $comentarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
      return $comentarios;
  }
//nuevo comentario
  public function grabarComentario($id_user){
    $sql = "INSERT INTO comentario (comentario,date,fk_id_user) VALUES (:new_comentario,:new_fecha,:new_id_user)";
    $query = $this->conn->prepare($sql);
    $query->execute($id_user);
  }

//contacto
  function getInformacion(){
    $consulta = $this->db->prepare("SELECT * FROM informacion");
    $consulta->execute();
    $informacion = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    return $informacion;
  }




//colecciones
  
  function getColecciones(){
    $colecciones = array();
    $consulta = $this->db->prepare("SELECT * FROM coleccion");
    $consulta->execute();

    while($coleccion = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaImagenes = $this->db->prepare("SELECT * FROM modelo WHERE fk_id_col=?");
      $consultaImagenes->execute(array($coleccion['id_col']));
      $imagenes_coleccion = $consultaImagenes->fetchAll();
      $coleccion['imagenes'] = $imagenes_coleccion;
      $colecciones[]=$coleccion;
    }

    return $colecciones;
  }

//cantidad de favoritos por modelo
  function getFavoritos(){
    $consulta = $this->db->prepare("SELECT id_mod, fk_id_user, count(*) AS cantidad FROM modelo JOIN favorito WHERE id_mod = fk_id_mod GROUP BY id_mod");
    $consulta->execute();
    $likes = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $likes;
  }

public function getPortfolios(){
    $sql = "SELECT* FROM portfolio JOIN img_port WHERE id_port=fk_id_port";
    $resultado = $this->db->prepare($sql);
    $resultado->execute();
    if(!$resultado){
      die(print($this->conn->errorInfo()[2]));
    }
     return $resultado->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getSlides(){
    $sql = "SELECT* FROM slide JOIN img_slide WHERE id_slide=fk_id_slide";
    $resultado = $this->db->prepare($sql);
    $resultado->execute();
    if(!$resultado){
      die(print($this->conn->errorInfo()[2]));
    }
     return $resultado->fetchAll(PDO::FETCH_ASSOC);
  }  
}
?>