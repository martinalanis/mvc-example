<?php

class Main extends Controller {
	function __construct(){
		Parent::__construct();
		$this->view->render('main/index');
	}
}
?>