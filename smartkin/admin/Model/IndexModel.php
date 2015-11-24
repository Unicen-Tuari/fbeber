<?php
class IndexModel
{

//VARIABLES
  private $admin;
  private $portfolios;
  private $usuarios;
  private $colecciones;
  private $comentarios;
  private $informacion;
  private $slides;
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=smartkin;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

//ADMINISTRADOR
  function getAdmin($email){
    $consulta = $this->db->prepare("SELECT * FROM admin WHERE email_admin = '$email'");
    $consulta->execute();
    $admin = $consulta->fetchAll(PDO::FETCH_ASSOC);   
    return $admin;
  }

//IMAGENES
  private function subirImagenes($imagenes){
    $carpeta = "../images/";
    $destinos_finales = array();
    foreach ($imagenes["tmp_name"] as $key => $value) {
      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
      move_uploaded_file($value, end($destinos_finales));
    }
    return $destinos_finales;
  } 

//USUARIOS
  function getUsuarios(){
    $consulta = $this->db->prepare("SELECT * FROM usuario");
    $consulta->execute();
    $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $usuarios;
  }
  function habilitarUsuario($id_usuario){
    $consulta = $this->db->prepare('UPDATE usuario SET bloqueado=0 WHERE id_user=?');
    $consulta->execute(array($id_usuario));
  }
  function NoHabilitarUsuario($id_usuario){
    $consulta = $this->db->prepare('UPDATE usuario SET bloqueado=1 WHERE id_user=?');
    $consulta->execute(array($id_usuario));
  }


//COMENTARIOS
  function getComentarios(){
    $consulta = $this->db->prepare("SELECT * FROM comentario JOIN usuario WHERE fk_id_user=id_user GROUP BY id_user");
    $consulta->execute();
    $comentarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
      return $comentarios;
  }
  function borrarComentario($id_comentario){
    $consulta = $this->db->prepare('DELETE FROM comentario WHERE id_com=?');
    $consulta->execute(array($id_comentario));
  }

//INFORMACION
  function getInformacion(){
    $consulta = $this->db->prepare("SELECT * FROM informacion");
    $consulta->execute();
    $informacion = $consulta->fetchAll(PDO::FETCH_ASSOC);    
    return $informacion;
  }
//agregar
  function agregarInfo($new_email,$new_tel,$new_wh,$new_dir,$new_fb,$new_tw,$new_g,$new_mercado,$new_olx){
    $consulta = $this->db->prepare('INSERT INTO informacion(email_info,tel_info,wh_info,dir_info,fb_info,tw_info,g_info,mercado_info,olx_info) VALUES(?,?,?,?,?,?,?,?,?)');
    $consulta->execute(array($new_email,$new_tel,$new_wh,$new_dir,$new_fb,$new_tw,$new_g,$new_mercado,$new_olx));
  }
//borrar
  function borrarInfo($id_info){
    $consulta = $this->db->prepare('DELETE FROM informacion WHERE id_info=?');
    $consulta->execute(array($id_info));
  }
//modificar
  function modificarInfo($upd_email,$upd_tel,$upd_wh,$upd_dir,$upd_fb,$upd_tw,$upd_g,$upd_mercado,$upd_olx,$id_info){
      $consulta = $this->db->prepare('UPDATE informacion SET email_info=?,tel_info=?,wh_info=?,dir_info=?,fb_info=?,tw_info=?,g_info=?,mercado_info=?,olx_info=? WHERE id_info=?');
      $consulta->execute(array($upd_email,$upd_tel,$upd_wh,$upd_dir,$upd_fb,$upd_tw,$upd_g,$upd_mercado,$upd_olx,$id_info));
  }

//COLECCIONES
  function getColecciones(){
    $colecciones = array();
    $consulta = $this->db->prepare("SELECT * FROM coleccion");
    $consulta->execute();
    while($coleccion = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaImagenes = $this->db->prepare("SELECT * FROM modelo where fk_id_col=?");
      $consultaImagenes->execute(array($coleccion['id_col']));
      $imagenes_coleccion = $consultaImagenes->fetchAll();
      $coleccion['imagenes'] = $imagenes_coleccion;
      $colecciones[]=$coleccion;
    }
    return $colecciones;
  }
//agregar
  function agregarColeccion($coleccion, $imagenes){
    try{
        $destinos_finales=$this->subirImagenes($imagenes);
      $this->db->beginTransaction();
      $consulta = $this->db->prepare('INSERT INTO coleccion(name_col) VALUES(?)');
      $consulta->execute(array($coleccion));
      $id_coleccion = $this->db->lastInsertId();

      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('INSERT INTO modelo(fk_id_col,img_mod) VALUES(?,?)');
        $consulta->execute(array($id_coleccion, $value));
      }
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
  }
//borrar
  function borrarColeccion($id_coleccion){
    $consulta = $this->db->prepare('DELETE FROM coleccion WHERE id_col=?');
    $consulta->execute(array($id_coleccion));
  }
//modificar
  function modificarNameCol($upd_name_col,$id_coleccion){
      $consulta = $this->db->prepare('UPDATE coleccion SET name_col=? WHERE id_col=?');
      $consulta->execute(array($upd_name_col,$id_coleccion));
  }
//publicar
  function publicarColeccion($id_coleccion){
    $consulta = $this->db->prepare('UPDATE coleccion SET publico=0 WHERE id_col=?');
    $consulta->execute(array($id_coleccion));
  }
//no publicar
  function noPublicarColeccion($id_coleccion){
    $consulta = $this->db->prepare('UPDATE coleccion SET publico=1 WHERE id_col=?');
    $consulta->execute(array($id_coleccion));
  }

//MODELOS
  function borrarModelo($id_modelo){
    $consulta = $this->db->prepare('DELETE FROM modelo WHERE id_mod=?');
    $consulta->execute(array($id_modelo));
  }
//agregar
    function agregarModelos($id_col, $imagenes){
    try{
      $destinos_finales=$this->subirImagenes($imagenes);
      $this->db->beginTransaction();
      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('INSERT INTO modelo(fk_id_col,img_mod) VALUES(?,?)');
        $consulta->execute(array($id_col, $value));
      }
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
  }
  function borrarImgPortfolio($id_img_port){
    $consulta = $this->db->prepare('DELETE FROM img_port WHERE id_img_port=?');
    $consulta->execute(array($id_img_port));
  }
  
//PORTFOLIOS
  function getPortfolios(){
    $portfolios = array();
    $consulta = $this->db->prepare("SELECT * FROM portfolio");
    $consulta->execute();
    while($portfolio = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaImgPort = $this->db->prepare("SELECT * FROM img_port where fk_id_port=?");
      $consultaImgPort->execute(array($portfolio['id_port']));
      $imagenes_portfolio = $consultaImgPort->fetchAll();
      $portfolio['imagenes'] = $imagenes_portfolio;
      $portfolios[]=$portfolio;
    }
    return $portfolios;
  }
//agregar
  function agregarPortfolio($portfolio, $imagenes){
    try{
      $destinos_finales=$this->subirImagenes($imagenes);
      $this->db->beginTransaction();
      $consulta = $this->db->prepare('INSERT INTO portfolio(name_port) VALUES(?)');
      $consulta->execute(array($portfolio));
      $id_portfolio = $this->db->lastInsertId();
      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('INSERT INTO img_port(fk_id_port,img_port) VALUES(?,?)');
        $consulta->execute(array($id_portfolio, $value));
      }
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
  }
//borrar
  function borrarPortfolio($id_portfolio){
    $consulta = $this->db->prepare('DELETE FROM portfolio WHERE id_port=?');
    $consulta->execute(array($id_portfolio));
  }
//modificar
  function modificarNamePort($upd_name_port,$id_portfolio){
      $consulta = $this->db->prepare('UPDATE portfolio SET name_port=? WHERE id_port=?');
      $consulta->execute(array($upd_name_port,$id_portfolio));
  }

//IMG_PORTFOLIOS
  function agregarImgPort($id_port, $imagenes){
    try{
      $destinos_finales=$this->subirImagenes($imagenes);
      $this->db->beginTransaction();
      foreach ($destinos_finales as $key => $value) {
        $consulta = $this->db->prepare('INSERT INTO img_port(fk_id_port,img_port) VALUES(?,?)');
        $consulta->execute(array($id_port, $value));
      }
      $this->db->commit();
    }
    catch(Exception $e){
    $this->db->rollBack();
    }
  }


  private function subirImagenesAjax($imagenes){
    $carpeta = "uploads/portfolios/";
    $destinos_finales = array();
    foreach ($imagenes as $imagen) {
      $destino =  $carpeta.uniqid().$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $destino);
      $destinos_finales[] = $destino;
    }
    return $destinos_finales;
  }


  function agregarImgPortfolio($id_tarea, $imagenes){
    $rutas=$this->subirImagenesAjax($imagenes);
    $consulta = $this->db->prepare('INSERT INTO img_port(fk_id_port,img_port) VALUES(?,?)');
    foreach($rutas as $ruta){
      $consulta->execute(array($id_tarea,$ruta));
    }
  }

}
?>