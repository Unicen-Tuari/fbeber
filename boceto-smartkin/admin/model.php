<?php
class Model {

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

//USUARIOS
function getUsuarios(){
    $consulta = $this->db->prepare("SELECT * FROM user");
    $consulta->execute();
    $usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    return $usuarios;
  }
  function habilitarUsuario($id_usuario){
    $consulta = $this->db->prepare('UPDATE user SET habilitado=1 WHERE id_user=?');
    $consulta->execute(array($id_usuario));
  }

  function NoHabilitarUsuario($id_usuario){
    $consulta = $this->db->prepare('UPDATE user SET habilitado=0 WHERE id_user=?');
    $consulta->execute(array($id_usuario));
  }
//COMENTARIOS
  function getComentarios(){
    $consulta = $this->db->prepare("SELECT * FROM comentario JOIN user where fk_id_user = id_user");
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
    $consulta = $this->db->prepare("SELECT * FROM info");
    $consulta->execute();
    $informacion = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    return $informacion;
  }

//COLECCIONES
  function getColecciones(){
    $colecciones = array();
    $consulta = $this->db->prepare("SELECT * FROM coleccion");
    $consulta->execute();
//Todas las tareas
    while($coleccion = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaImagenes = $this->db->prepare("SELECT * FROM modelo where fk_id_col=?");
      $consultaImagenes->execute(array($coleccion['id_col']));
      $imagenes_coleccion = $consultaImagenes->fetchAll();
      $coleccion['imagenes'] = $imagenes_coleccion;
      $colecciones[]=$coleccion;
    }

    return $colecciones;
  }

  function agregarColeccion($coleccion, $imagenes){

try{

  $destinos_finales=$this->subirImagenes($imagenes);
//Inserto la tarea
    $this->db->beginTransaction();
    $consulta = $this->db->prepare('INSERT INTO coleccion(name_col) VALUES(?)');
    $consulta->execute(array($coleccion));
    $id_coleccion = $this->db->lastInsertId();
//Insertar las imagenes
    foreach ($destinos_finales as $key => $value) {
      $consulta = $this->db->prepare('INSERT INTO modelo(fk_id_col,path_mod) VALUES(?,?)');
      $consulta->execute(array($id_coleccion, $value));
    }
    $this->db->commit();
  }
  catch(Exception $e){

    $this->db->rollBack();
  }
  }

  function borrarColeccion($id_coleccion){
    $consulta = $this->db->prepare('DELETE FROM coleccion WHERE id_col=?');
    $consulta->execute(array($id_coleccion));
  }

  function borrarModelo($id_modelo){
    $consulta = $this->db->prepare('DELETE FROM modelo WHERE id_mod=?');
    $consulta->execute(array($id_modelo));
  }

  function publicarColeccion($id_coleccion){
    $consulta = $this->db->prepare('UPDATE coleccion SET public=1 WHERE id_col=?');
    $consulta->execute(array($id_coleccion));
  }

  function noPublicarColeccion($id_coleccion){
    $consulta = $this->db->prepare('UPDATE coleccion SET public=0 WHERE id_col=?');
    $consulta->execute(array($id_coleccion));
  }

  function agregarModelos($id_tarea, $imagenes){
    $rutas=$this->subirImagenesAjax($imagenes);
    $consulta = $this->db->prepare('INSERT INTO modelo(fk_id_col,path_mod) VALUES(?,?)');
    foreach($rutas as $ruta){
      $consulta->execute(array($id_tarea,$ruta));
    }
  }
  
//PORTFOLIOS
  function getPortfolios(){
    $portfolios = array();
    $consulta = $this->db->prepare("SELECT * FROM portfolio");
    $consulta->execute();
//Todas las tareas
    while($portfolio = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaImgPort = $this->db->prepare("SELECT * FROM img_portfolio where fk_id_port=?");
      $consultaImgPort->execute(array($portfolio['id_port']));
      $imagenes_portfolio = $consultaImgPort->fetchAll();
      $portfolio['imagenes'] = $imagenes_portfolio;
      $portfolios[]=$portfolio;
    }

    return $portfolios;
  }

  function agregarPortfolio($portfolio, $imagenes_portfolio){

try{

  $destinos_finales=$this->subirImagenes($imagenes_portfolio);
//Inserto la tarea
    $this->db->beginTransaction();
    $consulta = $this->db->prepare('INSERT INTO portfolio(name_port) VALUES(?)');
    $consulta->execute(array($portfolio));
    $id_portfolio = $this->db->lastInsertId();
//Insertar las imagenes
    foreach ($destinos_finales as $key => $value) {
      $consulta = $this->db->prepare('INSERT INTO img_portfolio(fk_id_port,path_port) VALUES(?,?)');
      $consulta->execute(array($id_portfolio, $value));
    }
    $this->db->commit();
  }
  catch(Exception $e){

    $this->db->rollBack();
  }
  }

  function borrarPortfolio($id_portfolio){
    $consulta = $this->db->prepare('DELETE FROM portfolio WHERE id_port=?');
    $consulta->execute(array($id_portfolio));
  }

  function borrarImgPortfolio($id_img_port){
    $consulta = $this->db->prepare('DELETE FROM img_portfolio WHERE id_img_port=?');
    $consulta->execute(array($id_img_port));
  }

  function actualizarColeccion($id_coleccion, $entity){
    $consulta = $this->db->prepare('UPDATE coleccion SET name_col=:name_col, public=:public WHERE id_col=:id_col');
    $consulta->execute(array(
      "name_col" => $entity->name_col,
      "public" => $entity->public,
      "id_col" => $id_coleccion
      )
    );
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
    $consulta = $this->db->prepare('INSERT INTO img_portfolio(fk_id_port,path_port) VALUES(?,?)');
    foreach($rutas as $ruta){
      $consulta->execute(array($id_tarea,$ruta));
    }
  }

	public function grabarUsuario($User){
		$sql = "INSERT INTO user (name_user,pass_user,email_user) VALUES (:new_name_user,:new_pass_user,:new_email)";
		$query = $this->conn->prepare($sql);
		$query->execute($User);
	}

//SLIDES

  function getSlides(){
    $consulta = $this->db->prepare("SELECT * FROM slide");
    $consulta->execute();
    $slides = $consulta->fetchAll(PDO::FETCH_ASSOC);
      return $slides;
  }

  function borrarSlide($id_slide){
    $consulta = $this->db->prepare('DELETE FROM slide WHERE id_slide=?');
    $consulta->execute(array($id_slide));
  }

}
?>
