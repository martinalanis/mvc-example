<?php 

class Agregar extends Controller
{
	
	function __construct()
	{
		Parent::__construct();
		/* Verifica si hay parametro en url para saber si viene de insercion de datos */
		$this->view->response = isset($_GET['res']) ? $_GET['res'] : null;
		$this->view->render('agregar/index');
	}

	public function insert()
	{
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
		$cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : null;

		/* Insertar y redirigir segun sea el caso */
		if ($this->producto->insert($nombre, $cantidad)) {
			header('Location:'.constant('URL').'agregar?res=si');
		} else {
			header('Location:'.constant('URL').'agregar?res=fallo');
		}

	}
}

?>