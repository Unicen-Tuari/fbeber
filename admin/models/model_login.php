<?php
class LoginModel
{
  private $host = "localhost";
  private $db = "gimnasio";
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
  
  public function getUsuario($email){
    $sql = "SELECT * FROM usuario where email = '$email'";
    $query = $this->conn->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }
  
}
?>