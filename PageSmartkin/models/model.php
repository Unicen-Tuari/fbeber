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
	
	public function getCategorias(){
	
		$sql = "SELECT * FROM categoria";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		 return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function getColecciones($id_categoria){
		$sql = "SELECT * FROM coleccion WHERE id_categoria =  '".$id_categoria."'";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getModelos($id_coleccion){
		$sql = "SELECT * FROM modelo m JOIN dispositivo d
		ON (m.id_modelo=d.id_modelo)  WHERE id_coleccion =  '".$id_coleccion."'";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>