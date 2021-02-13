<?php 

class Agregar extends Controller
{
	
	function __construct()
	{
		Parent::__construct();
		// $this->view->response = null;
		$this->view->render('agregar/index');
	}

	public function insert()
	{
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
		$cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : null;

		if ($this->producto->insert($nombre, $cantidad)) {
			echo '<div class="alert alert-success mt-3" role="alert">
			  Se agrego el producto.
			</div>';
		} else {
			echo '<div class="alert alert-danger mt-3" role="alert">
			  Fallo al guardar el producto.
			</div>';
		}

	}
}

?>