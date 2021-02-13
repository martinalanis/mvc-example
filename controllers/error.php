<?php

class AppError extends Controller {
  function __construct(){
		Parent::__construct();
		$this->view->render('error/index');
	}
}
?>