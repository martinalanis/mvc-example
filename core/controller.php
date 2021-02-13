<?php
require_once 'models/producto.php';

class Controller{
	function __construct(){
		$this->view = new View();
		$this->producto = new Producto();
	}
}



?>