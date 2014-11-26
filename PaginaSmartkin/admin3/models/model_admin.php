<?php
class Modeladmin
{ 
	private $conn;
	
	public function __construct()
	{
		include ('../models/conexion.php');
		try
		{
			$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		}
		catch(PDOException $pe)
		{
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
	}
	/*usuarios*/
	public function consultaUsuarios()
	{
		$sql = "SELECT * FROM usuario;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaDetalleuser($id_usuario)
	{
		$sql = "SELECT * FROM usuario WHERE id_usuario = $id_usuario;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function deleteUser($id)
	{
		$sql = "DELETE FROM usuario WHERE id_usuario=$id;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -3;
	}

	/*colecciones*/
	public function consultaColeccion()
	{
		$sql = "SELECT * FROM coleccion;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaDetallecol($id_coleccion)
	{
		$sql = "SELECT * FROM coleccion WHERE id_coleccion = $id_coleccion;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function deleteCol($id)
	{
		$sql = "DELETE FROM coleccion WHERE id_coleccion=$id;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -7;
	}

	/*colecciones*/
	public function consultaPortfolio()
	{
		$sql = "SELECT * FROM portfolio;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaDetalleport($id_portfolio)
	{
		$sql = "SELECT * FROM portfolio WHERE id_portfolio = $id_portfolio;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function deletePort($id)
	{
		$sql = "DELETE FROM portfolio WHERE id_portfolio=$id;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -10;
	}
	/*modelos*/
	public function consultaModelos()
	{
		$sql = "SELECT * FROM modelo;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaDetallemod($id_modelo)
	{
		$sql = "SELECT * FROM modelo WHERE id_modelo = $id_modelo;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function deleteMod($id)
	{
		$sql = "DELETE FROM modelo WHERE id_modelo=$id;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -8;
	}

	/*categorias*/
	public function consultaCategorias()
	{
		$sql = "SELECT * FROM categoria;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaDetallecat($id_categoria)
	{
		$sql = "SELECT * FROM categoria WHERE id_categoria = $id_categoria;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function guardaCat($categoria)
	{
		$sql = "INSERT INTO categoria VALUES (NULL,'".$categoria['nombre_categoria']."');";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		$sql = "SELECT LAST_INSERT_ID();";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC)['LAST_INSERT_ID()'];
	}
	public function updateCat($categoria)
	{
		$sql = "UPDATE categoria SET nombre_categoria = '".$categoria['nombre_categoria']."' WHERE id_categoria = ".$categoria['id_categoria']."";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -5;
	}
	public function deleteCat($id)
	{
		$sql = "DELETE FROM categoria WHERE id_categoria=$id; ";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -4;
	}
	

}
?>