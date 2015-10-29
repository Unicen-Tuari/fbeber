<?php
class Model
{
	private $host = "localhost";
	private $db = "smartkin";
	private $user = "root";
	private $pass = "";
	private $conn;
    
	
    public function __construct(){
        try{
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
    }
	
	public function getcategoriasNombres(){
	
		$sql = "SELECT * FROM categoria";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		 return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getUsers(){
	
		$sql = "SELECT * FROM user";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		 return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}

	public function grabarComentario($formulario){
		$sql = "INSERT INTO comentario (id_user, comentario) VALUES (:new_id_user,:new_comentario)";
		$query = $this->conn->prepare($sql);
		$query->execute($formulario);
	}

	public function getContacto(){
	
		$sql = "SELECT * FROM info";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		 return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getPortfolio(){
	
		$sql = "SELECT * FROM portfolio";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		 return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getComentario(){
	
		$sql = "SELECT * FROM comentario c JOIN user u ON (c.id_user = u.id_user) ORDER BY fecha DESC";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		 return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function getColeccionesPorcategoria($categoria){
		$sql = "SELECT * FROM coleccion WHERE id_cat =  '".$categoria."'";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function grabarUsuario($User){
		$sql = "INSERT INTO user (name_user,pass_user,email) VALUES (:new_name_user,:new_pass_user,:new_email)";
		$query = $this->conn->prepare($sql);
		$query->execute($User);
	}
}
?>
