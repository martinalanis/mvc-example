<?php 

class Agregar extends Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->view->render('agregar/index');
	}

	public function insert()
	{
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
		$cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : null;

		echo 'cantidad'. $cantidad . ', nombre ' . $nombre; 
	}
}

?>