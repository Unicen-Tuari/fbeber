<?php
class Model
{
	private $host = "localhost";
	private $db = "smartkin_db";
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

	public function getContacto(){
	
		$sql = "SELECT * FROM info";
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
		$sql = "INSERT INTO user (name_user,pass,email) VALUES (:new_name_user,:new_pass,:new_email)";
		$query = $this->conn->prepare($sql);
		$query->execute($User);
	}
}
?>