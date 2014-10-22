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
		
			$sql = "SELECT id_categoria, nombre_categoria FROM categoria";
			$resultado = $this->conn->prepare($sql);
			$resultado->execute();
			if(!$resultado){
				die(print($this->conn->errorInfo()[2]));
			}
			 return $resultado->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function getColecciones($id_categoria){
			$sql = "SELECT id_coleccion, img_coleccion, nombre_coleccion FROM coleccion WHERE id_categoria =  '".$id_categoria."'";
			$resultado = $this->conn->prepare($sql);
			$resultado->execute();
			if(!$resultado){
				die(print($this->conn->errorInfo()[2]));
			}
			
			return $resultado->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getModelos($id_coleccion){
<<<<<<< HEAD
			$sql = "SELECT *
			FROM modelo WHERE id_coleccion =  '".$id_coleccion."'";
=======
			$sql = "SELECT id_modelo, nombre_modelo, img_modelo, img_dispositivo, nombre_dispositivo
			FROM modelo m JOIN dispositivo d
			ON (m.id_modelo=d.id_modelo)  WHERE id_coleccion =  '".$id_coleccion."'";
>>>>>>> 74beeb35f7ee36a93d45a7fdbe3933dc4e888ced
			$resultado = $this->conn->prepare($sql);
			$resultado->execute();
			if(!$resultado){
				die(print($this->conn->errorInfo()[2]));
			}
			
			return $resultado->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>