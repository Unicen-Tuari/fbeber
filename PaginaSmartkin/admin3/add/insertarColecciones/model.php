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
	
	public function grabarFormulario($formulario){
		$sql = "INSERT INTO coleccion (nombre_coleccion, id_categoria, img_coleccion) VALUES (:nombre_coleccion, :id_categoria, :img_coleccion)";
		$query = $this->conn->prepare($sql);
		$query->execute($formulario);
	}
	
}
?>