<?php

class Consulta extends Controller {
    function __construct(){
    	Parent::__construct();
        $this->view->render('consulta/index');
    }
}
?>