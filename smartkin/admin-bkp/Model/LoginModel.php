<?php
class LoginModel
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
	
	public function getAdmin($mail){
		$sql = "Select * from admin where email_admin = '$mail'";
		$query = $this->conn->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}
	
}
?>