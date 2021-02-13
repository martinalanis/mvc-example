<?php

class Consulta extends Controller {
	function __construct(){
		Parent::__construct();
		$this->view->data = $this->producto->getAll();
		$this->view->render('consulta/index');
	}
}
?>