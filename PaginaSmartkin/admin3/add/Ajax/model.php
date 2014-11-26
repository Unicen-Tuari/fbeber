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
	
		$sql = "SELECT* FROM categoria";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		 return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}

	public function grabarFormulario($formulario){
		$sql = "INSERT INTO coleccion (id_categoria, nombre_coleccion, img_coleccion) VALUES (:id_categoria, :nombre_coleccion, :img_coleccion)";
		$query = $this->conn->prepare($sql);
		$query->execute($formulario);
	}
}
?>