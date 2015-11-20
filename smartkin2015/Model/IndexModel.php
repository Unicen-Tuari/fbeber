<?php
class IndexModel
{

//VARIABLES
  private $admin;
  private $comentariosUser;
  private $likes;
  private $formulario;
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=smartkin;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

function modificarNameUser($upd_name,$id_usuario){
      $consulta = $this->db->prepare('UPDATE usuario SET name_user=? WHERE id_user=?');
      $consulta->execute(array($upd_name,$id_usuario));
  }


function modificarPassUser($upd_pass,$id_usuario){
      $consulta = $this->db->prepare('UPDATE usuario SET pass_user=? WHERE id_user=?');
      $consulta->execute(array($upd_pass,$id_usuario));
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
    $consulta = $this->db->prepare("SELECT * FROM comentario JOIN usuario WHERE fk_id_user=id_user AND usuario.bloqueado=true");
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

//portfolios
  function getPortfolios(){
    $portfolios = array();
    $consulta = $this->db->prepare("SELECT * FROM portfolio");
    $consulta->execute();

    while($portfolio = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaImgPort = $this->db->prepare("SELECT * FROM img_portfolio where fk_id_port=?");
      $consultaImgPort->execute(array($portfolio['id_port']));
      $imagenes_portfolio = $consultaImgPort->fetchAll();
      $portfolio['imagenes'] = $imagenes_portfolio;
      $portfolios[]=$portfolio;
    }

    return $portfolios;
  }

//slides

  
}
?>