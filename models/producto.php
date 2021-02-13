<?php 

class Producto
{
	private $db;

	function __construct()
	{
		$this->db = $this->connectDB();
	}

	public function connectDB()
	{
		$mysqli = new mysqli("localhost","root","","mvc");

		if ($mysqli->connect_errno) {
		  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		  return null;
		} else {
			// echo 'conectado a db';
			return $mysqli;
		}
	}

	public function getAll()
	{
		$sql = "SELECT * FROM productos";
		$result = $this->db->query($sql);
		return $result->fetch_all(MYSQLI_ASSOC);
	}
}

?>